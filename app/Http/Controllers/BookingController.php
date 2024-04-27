<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Mission;
use Illuminate\Http\Request;

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

        return redirect()->route('bookings')->with('success', 'Pick-Up Confirmed. Car is on Move');
    }

    public function delivery($id)
    {
        $pick_up_car = Mission::leftJoin('cars', 'cars.id', '=', 'missions.car_id')
                                ->where('cars.id',$id)
                                ->select('missions.id as mission_id','cars.id as car_id')
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

        return redirect()->route('bookings')->with('success', 'Delivery Confirmed. Car is Delivered at destination');
    }
}
