<?php

namespace App\Http\Controllers;

use App\Mail\CarBooked;
use App\Mail\CarDriver;
use App\Mail\OfferAcceptedMail;
use App\Models\Balance;
use App\Models\Car;
use App\Models\Invoice;
use App\Models\Mission;
use App\Models\Proposal;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Customer;
use Stripe\PaymentIntent;
use Stripe\PaymentMethod;
use Stripe\Stripe;
use Stripe\StripeClient;

class ProposalController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $user_type = auth()->user()->user_type;
        if($user_type == '4' || $user_type == '5')
        {
            $proposals = Proposal::leftJoin('cars', 'cars.id', '=', 'proposals.car_id')
                                    // ->where('proposals.status', '=', 'Pending')
                                    ->where('proposals.owner_id', $user_id)
                                    ->select('cars.car_type as car_type',
                                            'cars.package_amount as actual_amount',
                                            'proposals.offer_amount as offer_amount',
                                            'proposals.pick_up_time as pick_up_time',
                                            'proposals.delivery_time as delivery_time',
                                            'proposals.status as status',
                                            'proposals.id as proposal_id',
                                            'proposals.car_id as car_id')
                                    ->get();
            return view('admin.proposals_approvals',compact('proposals'));
        }
        $proposals = Proposal::leftJoin('cars', 'cars.id', '=', 'proposals.car_id')
                                ->where('proposals.driver_id', $user_id)
                                ->select('cars.car_type as car_type',
                                        'cars.package_amount as actual_amount',
                                        'proposals.offer_amount as offer_amount',
                                        'proposals.pick_up_time as pick_up_time',
                                        'proposals.delivery_time as delivery_time',
                                        'proposals.status as status',
                                        'proposals.id as proposal_id',
                                        'proposals.car_id as car_id')
                                ->get();
        // $proposals = Proposal::where('driver_id',$user_id)->get();
        return view('admin.proposals',compact('proposals'));
    }

    public function addProposals(Request $request)
    {
        $validate = Proposal::where('driver_id', auth()->user()->id)
                            ->where('car_id', $request->car_id)
                            ->exists();

        if ($validate == true) {
            return redirect()->back()->with('success', 'You already made an offer on this car.');
        }

        $proposals = new Proposal();
        $proposals->owner_id = $request->owner_id;
        $proposals->car_id = $request->car_id;
        $proposals->offer_amount = $request->offer_amount;
        $proposals->driver_id = auth()->user()->id;
        $proposals->extra_milage = $request->extra_milage;
        $proposals->pick_up_time = $request->pick_up_time;
        $proposals->delivery_time = $request->delivery_time;
        $proposals->status = 'Pending';
        $proposals->save();

        // email send to car owner for offer
        $owner = User::find($request->owner_id); // Assuming owner is a User model
        $car = Car::find($request->car_id); // Assuming car is a Car model
        $data = [
            'owner' => $owner->name,
            'driver' => auth()->user()->family_name,
            'car' => $car->name,
            'offer_amount' => $request->offer_amount,
            'pick_up_time' => $request->pick_up_time,
            'delivery_time' => $request->delivery_time,
        ];

        Mail::send('emails.proposal', $data, function ($message) use ($owner) {
            $message->to($owner->email)
                    ->subject('Good News! You received an Offer.');
        });

        return redirect()->back()->with('success', 'Offer Sent Successfully');
    }

    public function updateStatus(Request $request)
    {
        if($request->status == 'Accept')
        {
            Stripe::setApiKey(config('services.stripe.secret'));
            $stripe = new StripeClient(config('services.stripe.secret'));

            $car = Car::find($request->car_id);
            $car->status = 'Booked';
            $car->save();

            // send email to driver here if offer accepted
            $proposal = Proposal::find($request->proposal_id);
            $driver = User::find($proposal->driver_id);
            Mail::to($driver->email)->send(new OfferAcceptedMail($proposal, $car, $driver));


            $mission = new Mission();
            $mission->user_id = auth()->user()->id;
            $mission->car_id = $request->car_id;
            $mission->pickup_date_time = $request->pickup;
            $mission->delivery_date_time = $request->delivery;
            $mission->amount = $request->offeramount;

            $mission->save();

            // Payment
            $car_owner = User::where('id', auth()->user()->id)->first();
            $customer = Customer::retrieve($car_owner->stripe_customer_id);

            $paymentMethod = PaymentMethod::all(['customer' => $car_owner->stripe_customer_id, 'type' => 'card']);

            $paymentMethodId = $paymentMethod->data['0']['id'];
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->offeramount * 100,
                'currency' => 'usd',
                'payment_method' => $paymentMethodId, // Use the correct Payment Method ID here
                'customer' => $car_owner->stripe_customer_id,
                'confirm' => true, // This is required to confirm the PaymentIntent
                'return_url' => route('welcome'),
            ]);


            // Invoice Status
            $invoice = Invoice::where('car_id', $request->car_id)->first();
            // dd($invoice->status);
            $invoice->status = 'Paid';
            $invoice->save();

            $listing = Car::where('id', $request->car_id)->first();

            $pdf = new Dompdf();
            $pdf->loadHtml(view('pdf.invoice', compact('invoice','listing')));
            $pdf->setPaper('A4', 'portrait');
            $pdf->render();
            $pdfContent = $pdf->output();

            Mail::to($car_owner->email)->send(new CarBooked($listing, $pdfContent, $driver, $mission));

            Mail::to($driver->email)->send(new CarDriver($listing, $pdfContent, $car_owner, $mission));

            $balance = new Balance();
            $balance->user_id = auth()->user()->id;
            $balance->amount = $request->offeramount - ($request->amount * 20 / 100);
            $balance->status = 'Pending';
            $balance->car_id = $request->car_id;
            $balance->save();
        }

        $proposal = Proposal::find($request->proposal_id);
        $proposal->status = $request->status.'ed';
        $proposal->save();

        return response()->json(['success' => "Offer {$request->status}ed successfully."]);
    }

}

