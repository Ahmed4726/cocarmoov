<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Stripe\Stripe;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Payout;
use Stripe\Transfer;

class WithdrawalController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;

        $balance = Balance::select(
            DB::raw('COALESCE(SUM(amount), 0) AS total_balance'),
            DB::raw('SUM(COALESCE(CASE WHEN status = "Pending" THEN amount ELSE 0 END, 0)) AS pending_balance'),
            DB::raw('SUM(COALESCE(CASE WHEN status = "Available" THEN amount ELSE 0 END, 0)) AS available_balance')
        )
        ->where('user_id', $user_id)
        ->first();
        return view('withdrawal.index', get_defined_vars());
    }


    public function withdraw(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:100',
        ], [
            'amount.required' => 'The :attribute field is required.',
            'amount.numeric' => 'The :attribute must be a number.',
            'amount.min' => 'The :attribute must be at least :min.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = auth()->user();
        $user_id = $user->id;

        // Get the available balance
        $available_balance = Balance::where('user_id', $user_id)
                                    ->where('status', 'Available')
                                    ->sum('amount');

        // Check if the requested amount is valid
        $withdrawal_amount = $request->input('amount');
        if ($withdrawal_amount > $available_balance) {
            return redirect()->back()->with('error', 'Insufficient balance or more than Available.');
        }

        $user = User::where('id',auth()->user()->id)->first();
            // Set your Stripe secret key
            Stripe::setApiKey(config('services.stripe.secret'));
            // $customer = \Stripe\Customer::retrieve($user->stripe_customer_id);
            // dd($customer);
            Payout::create([
                "amount" => $request->amount * 100, // Amount in cents
                "currency" => "usd", // Replace with the user's currency
                "destination" => $user->stripe_account_id,
            ]);

            

            return redirect()->back()->with('success', 'Withdrawal successful.');
        }
}
