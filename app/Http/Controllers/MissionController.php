<?php

namespace App\Http\Controllers;


use App\Models\Car;
use App\Models\Invoice;
use App\Models\Mission;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Customer;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Mail\CarBooked;
use App\Mail\CarDriver;
use App\Models\Balance;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Stripe\PaymentMethod;
use Stripe\StripeClient;

class MissionController extends Controller
{
    public function index()
    {
        $role = auth()->user()->user_type;
        $missions = Car::where('status','Available')->get();
        return view('missions.index',compact('missions','role'));
    }

    public function booking($id)
    {
        $role = auth()->user()->user_type;
        $mission = Car::where('id', $id)->first();
        // Assuming $pickup_date_time is available, adjust as per your logic
        $from_address = Car::where('from_address', $mission->from_address)->first();
        return view('missions.booking', compact('mission', 'from_address','role'));
    }


    public function bookRide(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $stripe = new StripeClient(config('services.stripe.secret'));

        $mission = new Mission();
        $mission->user_id = auth()->user()->id;
        $mission->car_id = $request->car_id;
        $mission->pickup_date_time = $request->pick_up_time;
        $mission->delivery_date_time = $request->delivery_time;
        $mission->amount = $request->amount;

        $mission->save();

        // Ride Status
        $car = Car::findOrFail($request->car_id);
        $car->status = 'Booked';
        $car->save();

        // Payment
        $car_owner = User::where('id', $request->owner_id)->first();
        $customer = Customer::retrieve($car_owner->stripe_customer_id);

        $paymentMethod = PaymentMethod::all(['customer' => $car_owner->stripe_customer_id, 'type' => 'card']);

            $paymentMethodId = $paymentMethod->data['0']['id'];
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->amount * 100,
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


        $pdf = new Dompdf();
        $pdf->loadHtml(view('pdf.invoice', compact('invoice')));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $pdfContent = $pdf->output();

        // $car_owner = User::where('id', $request->owner_id)->first();

        $listing = Car::where('id', $request->car_id)->first();

        $driver = User::where('id', auth()->user()->id)->first();

        Mail::to($car_owner->email)->send(new CarBooked($listing, $pdfContent, $driver, $mission));

        Mail::to($driver->email)->send(new CarDriver($listing, $pdfContent, $car_owner, $mission));

        $balance = new Balance();
        $balance->user_id = auth()->user()->id;
        $balance->amount = $request->amount - ($request->amount * 20 / 100);
        $balance->status = 'Pending';
        $balance->car_id = $request->car_id;
        $balance->save();

        return redirect()->route('missions');
    }

    public function checkMissions(Request $request)
    {
        $role = auth()->user()->user_type;
        $cityOfCollection = $request->input('city_of_collection');
        $cityOfDelivery = $request->input('city_of_delivery');

        $missions = Car::where('status', 'Available')
                        ->when($cityOfCollection, function ($query, $cityOfCollection) {
                            return $query->where('from_address', 'like', "%$cityOfCollection%");
                        })
                        ->when($cityOfDelivery, function ($query, $cityOfDelivery) {
                            return $query->where('to_address', 'like', "%$cityOfDelivery%");
                        })
                        ->get();

        $html = '';

        foreach ($missions as $mission) {
            if(($mission->selected_package == 'economy' && $role == 7) ||
                ($mission->selected_package == 'express' && $role == 6) ||
                ($mission->selected_package == 'premium' && $role == 8)) {
                $html .= '
                <div class="container-fluid">
                    <div class="card mt-4 rounded">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mt-3">
                                            <div class="col-md-2">
                                                <p><b>' . $mission->from_address . ' - ' . $mission->to_address . '</b></p>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-muted">Valid till ' . $mission->car_move_departure_date_from . ' - ' . $mission->car_move_departure_date_to . '</div>
                                            </div>
                                            <div class="col-md-2">Distance: 890 km</div>
                                            <div class="col-md-2">
                                                <img src="' . asset('/dist/img/cars/3m3.png') . '" alt="test" class="img-fluid" width="100" height="100">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="' . route('booking', ['id' => $mission->id]) . '" class="btn btn-warning">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }

        return $html;
    }
    
}
