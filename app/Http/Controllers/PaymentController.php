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
// Set the Stripe API key
Stripe::setApiKey(config('services.stripe.secret'));

            // Get the authenticated user
            $user = Auth::user();

            // Create a new Stripe Connected Account
            $connectedAccount = \Stripe\Account::create([
                'type' => 'standard', // or 'express' or 'custom', depending on your use case
            ]);

            // dd($connectedAccount);
            // Create or retrieve a Stripe Customer associated with the user
            $customer = Customer::create([
                'payment_method' => $request->paymentMethodId,
                'email' => $user->email,
                'metadata' => [
                    'connected_account_id' => $connectedAccount->id,
                ],
            ]);

            // dd($customer);
            // Get the Stripe Customer ID
            $stripeCustomerId = $customer->id;

            // Save the Stripe Customer ID to the user model
            $user->stripe_customer_id = $stripeCustomerId;
            $user->stripe_account_id = $connectedAccount->id;
            $user->save();

        // }


        return response()->json(['success' => true, 'paymentIntentId' => $request->paymentMethodId]);
    }
}
