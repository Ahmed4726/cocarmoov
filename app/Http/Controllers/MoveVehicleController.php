<?php

namespace App\Http\Controllers;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\OtpService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MoveVehicleController extends Controller
{
    protected $otpService;

    public function __construct(OtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function index(Request $request)
    {
        $roles = Role::get()->except(3);
        $car_move = $request->all();
        // dd($car_move);
        $selectedVehicleType = $car_move['vehicle-type'];
        $selectedCondition = $car_move['vehicle-condition'];
        $distance = $car_move['distance'];
        $car_owner = $car_move['vehicle-mover'];

        $premium_package = null;
        $express_package = null;
        $economyPackage = null;
        $tax_notation = null;

        $stripe_customer_id = null;
        if (auth()->check()) {
            $stripe_customer_id = auth()->user()->stripe_customer_id;
        }


        if (in_array($selectedVehicleType, ['Citadine', 'Berline', 'Sportive', 'Monospace', '4×4', '3m3', '6m3', '9m3', '12m3', '15m3']) && in_array($selectedCondition, ['En-panne', 'Accidenté'])) {
            $premium_package = number_format(1.49 * $distance + 149, 2, '.', '');
        } elseif ($selectedVehicleType === 'Collection') {
            $premium_package = number_format(1.49 * $distance + 149, 2, '.', '');
        } elseif (in_array($selectedVehicleType, ['25m3', '30m3', 'Camion-benne', 'Camping-car', 'Van-aménagé']) && $selectedCondition === 'En-état-de-marche') {
            $express_package = number_format(0.94 * $distance + 59, 2, '.', '');
            $economyPackage = number_format(0.10 * $distance + 49, 2, '.', '');
        } elseif (in_array($selectedVehicleType, ['20m3', '25m3', '30m3']) && in_array($selectedCondition, ['En-panne', 'Accidenté'])) {
            // Handle specific case if needed
        } elseif ($selectedVehicleType === '20m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = number_format(0.88 * $distance + 59, 2, '.', '');
            $economyPackage = number_format(0.10 * $distance + 49, 2, '.', '');
        } elseif (in_array($selectedVehicleType, ['Citadine', 'Berline']) && $selectedCondition === 'En-état-de-marche') {
            $express_package = number_format(0.65 * $distance + 59, 2, '.', '');
            // dd($express_package);
            $economyPackage = number_format(0.10 * $distance + 49, 2, '.', '');
            $premium_package = number_format(1.49 * $distance + 149, 2, '.', '');
        } elseif (in_array($selectedVehicleType, ['Sportive', 'Monospace', '4×4']) && $selectedCondition === 'En-état-de-marche') {
            $express_package = number_format(0.66 * $distance + 59, 2, '.', '');
            $economyPackage = number_format(0.10 * $distance + 49, 2, '.', '');
            $premium_package = number_format(1.49 * $distance + 149, 2, '.', '');
        } elseif (in_array($selectedVehicleType, ['3m3', '6m3']) && $selectedCondition === 'En-état-de-marche') {
            $express_package = number_format(0.69 * $distance + 59, 2, '.', '');
            $economyPackage = number_format(0.10 * $distance + 49, 2, '.', '');
            $premium_package = number_format(1.49 * $distance + 149, 2, '.', '');
        } elseif ($selectedVehicleType === '9m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = number_format(0.73 * $distance + 59, 2, '.', '');
            $economyPackage = number_format(0.10 * $distance + 49, 2, '.', '');
            $premium_package = number_format(1.49 * $distance + 149, 2, '.', '');
        } elseif ($selectedVehicleType === '12m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = number_format(0.76 * $distance + 59, 2, '.', '');
            $economyPackage = number_format(0.10 * $distance + 49, 2, '.', '');
            $premium_package = number_format(1.49 * $distance + 149, 2, '.', '');
        } elseif ($selectedVehicleType === '15m3' && $selectedCondition === 'En-état-de-marche') {
            $express_package = number_format(0.84 * $distance + 59, 2, '.', '');
            $economyPackage = number_format(0.10 * $distance + 49, 2, '.', '');
            $premium_package = number_format(1.49 * $distance + 149, 2, '.', '');
        }

        // Multiply packages by 1.2 if $car_owner is equal to $car_move['vehicle-mover']
        if ($car_owner === 'private') {
            $premium_package *= 1.2;
            $express_package *= 1.2;
            $economyPackage *= 1.2;

            // Format the values using number_format
            $formatted_premium = number_format($premium_package, 2, '.', '');
            $formatted_express = number_format($express_package, 2, '.', '');
            $formatted_economy = number_format($economyPackage, 2, '.', '');

            $premium_package = $formatted_premium;
            $express_package = $formatted_express;
            $economyPackage = $formatted_economy;
        }

        if ($car_owner === 'professional') {
            $tax_notation = 'HT';
        } else {
            $tax_notation = 'TTC';
        }
        $isAuthenticated = Auth::check();

        return view('frontend.move_vehicle', compact('car_move', 'express_package', 'economyPackage', 'premium_package', 'tax_notation', 'selectedVehicleType', 'distance', 'car_owner','isAuthenticated','stripe_customer_id','roles'));
    }



    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return response()->json(['success' => true], 200);
        }

        return response()->json(['fail' => true], 401);
    }

     public function store(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
                'phone_number' => ['required'],
                'password' => ['required', 'confirmed', 'min:8', Rules\Password::defaults()],
            ], [
                'first_name.required' => 'The first name field is required.',
                'last_name.required' => 'The last name field is required.',
                'email.required' => 'The email field is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email address is already in use.',
                'password.required' => 'The password field is required.',
                'password.confirmed' => 'The password confirmation does not match.',
                'password.min' => 'The password must be at least :min characters.',
            ]);

            // Create the user
            $user = User::create([
                'family_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_type' => $request->user_type,
                'note' => 'Submit all documents to complete your profile',
            ]);

            // Trigger the Registered event
            event(new Registered($user));

            // Log in the user
            Auth::login($user);

            // Send OTP (assuming $this->otpService is properly defined and injected)
            $this->otpService->generateOtp($request->phone_number);

            return response()->json(['success' => true], 200);
        } catch (ValidationException $e) {
            return response()->json(['fail' => true, 'errors' => $e->errors()], 401);
        }
    }
}
