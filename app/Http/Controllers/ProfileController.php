<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index() {
        $user = Auth::user();
        return view('admin.my_profile',compact('user'));
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        // dd($request); // Uncomment this line if you want to see the dump
        $user = auth()->user();

        // Update the user's email_verified_at attribute if email is changed
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Update the user model with the new data
        $user->fill($request->all());

        // Handle the photo file if it exists
        if ($request->hasFile('photo')) {
            $photoFilename = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('/dist/img/profile'), $photoFilename);
            $photoPath = "dist/img/profile/{$photoFilename}";
            $user->photo = $photoPath; // Assuming 'photo' is the attribute where you store the filename
        }

        // Handle other file uploads
        $fileInputs = [
            'id_card', 'mission_document', 'driving_lisence', 'company_registeration', 'professional_liabilities',
            'carmov_insurance', 'trade_plates', 'bank_details', 'signed_contract', 'transport_capacity', 'transport_insurance',
            'vehicle_carrier_reg', 'income_contribution', 'vehicle_condition_test'
        ];

        foreach ($fileInputs as $inputName) {
            if ($request->hasFile($inputName)) {
                $filename = $request->file($inputName)->getClientOriginalName();
                $request->file($inputName)->move(public_path("/dist/img/{$inputName}"), $filename);
                $filePath = "dist/img/{$inputName}/{$filename}";
                $user->{$inputName} = $filePath; // Assuming the attribute name matches the input name
            }
        }

        $user->status = 'Under Review';
        $user->save();

        // Redirect or return a response here
        // return true;
        return redirect()->route('profile.index');
    }





    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function pendingProfiles()
    {
        $pending_profiles = User::where('status','Under Review')->get();
        return view('admin.pendingProfiles',compact('pending_profiles'));
    }

    public function pendingProfilesDetails($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.profileCheck',compact('user'));
    }

    public function profileStatus(Request $request)
    {
        $status = null;
        if($request->status == 0)
        {
            $status = 'Pending';
        }
        else
        {
            $status = 'Verified';
        }
        $profile = User::where('id', $request->user_id)->first();

        $profile->note = $request->note;
        $profile->status = $status;

        $profile->save();

        return redirect()->route('profile.pending');
    }
}
