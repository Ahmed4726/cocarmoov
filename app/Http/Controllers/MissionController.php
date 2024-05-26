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
        $missions = Car::where('status','Available')->get();
        return view('missions.index',compact('missions'));
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
}
