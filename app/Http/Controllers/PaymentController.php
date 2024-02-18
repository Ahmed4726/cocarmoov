<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Customer;


class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment.form');
    }

    public function processPayment(Request $request)
    {
        // dd("ok");
        Stripe::setApiKey(config('services.stripe.secret'));

        // Get the authenticated user
        $user = Auth::user();

        // Create or retrieve a Stripe Customer associated with the user
        $stripeCustomerId = $user->stripe_customer_id;

        if (!$stripeCustomerId) {
            $customer = Customer::create([
                'payment_method' => $request->paymentMethodId,
                'email' => $user->email,
            ]);

            $stripeCustomerId = $customer->id;
            $user->stripe_customer_id = $stripeCustomerId;
            $user->save();
        }
        $paymentIntent = PaymentIntent::create([
            'amount' => 1 * 100,
            'currency' => 'usd',
            'payment_method' => $request->paymentMethodId,
            'confirmation_method' => 'manual',
            'confirm' => true,
            'customer' => $stripeCustomerId,
            'return_url' =>  route('dashboard'),
        ]);

        return response()->json(['success' => true, 'paymentIntentId' => $request->paymentMethodId]);
    }
}
