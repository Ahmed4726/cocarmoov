<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Stripe\Customer;
use Stripe\Stripe;
use Stripe\PaymentMethod;

class CardController extends Controller
{
        public function showCards()
        {
            Stripe::setApiKey(config('services.stripe.secret'));

            // Get the authenticated user
            $user = Auth::user();

            // Retrieve the user's Stripe customer ID
            $stripeCustomerId = $user->stripe_customer_id;

            // Retrieve the user's saved cards
            $cards = [];

            if ($stripeCustomerId) {
                $customer = Customer::retrieve($stripeCustomerId);
                $paymentMethods = PaymentMethod::all(['customer' => $stripeCustomerId, 'type' => 'card']);
                foreach ($paymentMethods as $paymentMethod) {
                // dd($paymentMethod->card->brand);

                    $cards[] = [
                        'id' => $paymentMethod->id,
                        'last4' => $paymentMethod->card->last4,
                        'name' => $paymentMethod->billing_details->name,
                        'brand' => $paymentMethod->card->brand,
                    ];
                }
            }

            return view('user.management_payment_method', compact('cards'));
        }

        public function deleteCard($cardId)
        {
            try {
                Stripe::setApiKey(config('services.stripe.secret'));

                // Get the authenticated user
                $user = Auth::user();

                // Retrieve the user's Stripe customer ID
                $stripeCustomerId = $user->stripe_customer_id;

                // Detach the card from the customer
                $paymentMethod = PaymentMethod::retrieve($cardId);
                $paymentMethod->detach();

                // Optionally, delete the card from your local database
                // Example assuming a 'cards' table with a 'stripe_card_id' column
                DB::table('cards')->where(['user_id' => $user->id, 'stripe_card_id' => $cardId])->delete();

                return redirect()->route('cards')->with('success', 'Card deleted successfully.');
            } catch (\Exception $e) {
                return redirect()->route('cards')->with('error', 'Failed to delete card.');
            }
        }
}
