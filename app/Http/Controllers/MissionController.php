<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Invoice;
use App\Models\Mission;
use Illuminate\Http\Request;
use Stripe\Customer;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Car::where('status','Available')->get();
        return view('missions.index',compact('missions'));
    }

    public function booking($id)
    {
        $mission = Car::where('id',$id)->first();
        return view('missions.booking',compact('mission'));
    }

    public function bookRide(Request $request)
    {

        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
        // dd($request);
        Stripe::setApiKey(config('services.stripe.secret'));

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
        // dd('not ok');
        // Payment
        $stripeCustomerId = auth()->user()->stripe_customer_id;
        $paymentMethod = $stripe->paymentMethods->all([
            'customer' => $stripeCustomerId,
            'type' => 'card',
          ]);
        $paymentMethodId = $paymentMethod->data['0']['id'];

        $paymentIntent = PaymentIntent::create([
            'amount' => $request->amount * 100,
            'currency' => 'usd',
            'payment_method' => $paymentMethodId,
            'automatic_payment_methods' => ['enabled' => true],
            'customer' => $stripeCustomerId,
        ]);


        // Invoice Status
        $invoice = Invoice::where('car_id', $request->car_id)->first();
        // dd($invoice->status);
        $invoice->status = 'Paid';
        $invoice->save();


        return redirect()->route('missions');
    }
}
