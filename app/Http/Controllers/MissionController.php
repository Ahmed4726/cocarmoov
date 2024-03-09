<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Invoice;
use App\Models\Mission;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Car::get();
        return view('missions.index',compact('missions'));
    }

    public function booking($id)
    {
        $mission = Car::where('id',$id)->first();
        return view('missions.booking',compact('mission'));
    }

    public function bookRide(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $mission = new Mission();
        $mission->user_id = auth()->user()->id;
        $mission->car_id = $request->car_id;
        $mission->pickup_date_time = $request->pick_up_time;
        $mission->delivery_date_time = $request->delivery_time;
        $mission->amount = $request->amount;

        $mission->save();

        // Ride Status
        $car = Car::where('car_id', $request->car_id);

        $car->status = 'Booked';
        $car->save();

        // Payment
        $stripeCustomerId = auth()->user()->stripe_customer_id;
        $paymentIntent = PaymentIntent::create([
            'amount' => $request->amount * 100,
            'currency' => 'usd',
            'payment_method' => $request->paymentMethodId,
            'confirmation_method' => 'manual',
            'confirm' => true,
            'customer' => $stripeCustomerId,
        ]);

        // Invoice Status
        $invoice = Invoice::where('car_id',$request->car_id);

        $invoice->status = 'Paid';
        $invoice->save();


        return redirect()->route('missions');
    }
}
