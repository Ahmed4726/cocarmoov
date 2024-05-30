<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\OtpService;

class OtpController extends Controller
{
    protected $otpService;

    public function __construct(OtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function sendOtp(Request $request)
    {
        $request->validate(['phone_number' => 'required']);

        try {
            $this->otpService->generateOtp($request->phone_number);
            return response()->json(['message' => 'OTP sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            'otp' => 'required|digits:6'
        ]);

        try {
            $verified = $this->otpService->verifyOtp($request->phone_number, $request->otp);

            if ($verified) {
                $user = User::where('phone_number', $request->phone_number)->first();
                $user->phone_verification = 'Verified';
                $user->save();

                return response()->json(['message' => 'OTP verified successfully']);
            }

            return response()->json(['message' => 'Invalid OTP'], 400);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function resendOtp(Request $request)
    {
        $request->validate(['phone_number' => 'required']);

        try {
            $this->otpService->resendOtp($request->phone_number);
            return response()->json(['message' => 'OTP resent successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
