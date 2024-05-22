<?php

namespace App\Http\Controllers;

use App\Mail\DriverDeliveryNotification;
use App\Mail\DriverPickupNotification;
use App\Mail\OwnerDeliveryNotification;
use App\Mail\OwnerPickupNotification;
use App\Models\Car;
use App\Models\Mission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        // Fetch bookings where status is 'completed' for history
        $historyBookings = Mission::leftJoin('cars', 'cars.id', '=', 'missions.car_id')
                                  ->where('cars.status', 'completed')
                                  ->where('missions.user_id', auth()->user()->id)
                                  ->select('cars.status as status', 'missions.id as id', 'cars.from_address as pick_up_address', 'cars.to_address as drop_location')
                                  ->get();

        // Fetch bookings where status is not 'completed' for in progress
        $inProgressBookings = Mission::leftJoin('cars', 'cars.id', '=', 'missions.car_id')
                                     ->where('cars.status', '<>', 'completed')
                                     ->where('missions.user_id', auth()->user()->id)
                                     ->select('cars.status as status', 'missions.id as id', 'cars.from_address as pick_up_address', 'cars.to_address as drop_location', 'cars.id as car_id')
                                     ->get();

        return view('admin.bookings', compact('historyBookings', 'inProgressBookings'));
    }


    public function pickUp($id)
    {
        $pick_up_car = Mission::leftJoin('cars', 'cars.id', '=', 'missions.car_id')
                                ->where('cars.id',$id)
                                ->select('missions.id as mission_id','cars.id as car_id')
                                ->first();

        return view('admin.pickUp',compact('pick_up_car'));
    }

    public function confirmPickUp(Request $request)
    {
        $id = $request->id;
        $pick_up = Mission::find($id);


        // Handle other file uploads
        $fileInputs = ['front_photos', 'back_photos'];

        foreach ($fileInputs as $inputName) {
            if ($request->hasFile($inputName)) {
                $filename = $request->file($inputName)->getClientOriginalName();
                $request->file($inputName)->move(public_path("dist/img/{$inputName}"), $filename);
                $filePath = "dist/img/{$inputName}/{$filename}";
                $pick_up->{$inputName} = $filePath; // Assuming the attribute name matches the input name
            }
        }

        $pick_up->save();

        $car = Car::find($request->car_id);
        $car->status = 'On-Move';
        $car->save();


        // Send email to driver he picked up the car
        $driver = User::find($pick_up->user_id);
        Mail::to($driver->email)->send(new DriverPickupNotification($pick_up, $car));

        // Send email to car owner when pickup
        $owner = User::find($car->user_id);
        Mail::to($owner->email)->send(new OwnerPickupNotification($pick_up, $car));

        return redirect()->route('bookings')->with('success', 'Pick-Up Confirmed. Car is on Move');
    }

    public function delivery($id)
    {
        $pick_up_car = Mission::leftJoin('cars', 'cars.id', '=', 'missions.car_id')
                                ->where('cars.id',$id)
                                ->select('missions.id as mission_id','cars.id as car_id','missions.back_photos as back_photos','missions.front_photos as front_photos','missions.amount as amount','cars.make_and_model as make_and_model','missions.delivery_date_time as delivery_date_time')
                                ->first();

        return view('admin.delivery',compact('pick_up_car'));
    }

    public function confirmDelivery(Request $request)
    {
        $id = $request->id;
        $delivery = Mission::find($id);

        // Handle other file uploads
        $fileInputs = ['front_photos', 'back_photos'];

        foreach ($fileInputs as $inputName) {
            if ($request->hasFile($inputName)) {
                $filename = $request->file($inputName)->getClientOriginalName();
                $request->file($inputName)->move(public_path("dist/img/{$inputName}"), $filename);
                $filePath = "dist/img/{$inputName}/{$filename}";
                $delivery->{$inputName} = $filePath; // Assuming the attribute name matches the input name
            }
        }

        $delivery->save();

        $car = Car::find($request->car_id);
        $car->status = 'Delivered';
        $car->save();
        // Send email to the driver that the car has been delivered
        $pick_up_car = Mission::leftJoin('cars', 'cars.id', '=', 'missions.car_id')
                                ->where('cars.id',$id)
                                ->select('missions.id as mission_id','cars.id as car_id','missions.back_photos as back_photos','missions.front_photos as front_photos','missions.amount as amount','cars.make_and_model as make_and_model','missions.delivery_date_time as delivery_date_time')
                                ->first();
        $mission = Mission::find($pick_up_car->mission_id);
        $driver = User::find($mission->user_id);
        Mail::to($driver->email)->send(new DriverDeliveryNotification($pick_up_car));

        // Send email to the car owner that the car has been delivered
        $car = Car::find($pick_up_car->car_id);
        $owner = User::find($car->user_id);
        Mail::to($owner->email)->send(new OwnerDeliveryNotification($pick_up_car));
        
        return redirect()->route('bookings')->with('success', 'Delivery Confirmed. Car is Delivered at destination');
    }
}
