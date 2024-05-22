<?php

namespace App\Http\Controllers;

use App\Mail\CarListed;
use App\Mail\DriverDeliveryApprovedNotification;
use App\Mail\RideCancellationNotification;
use App\Models\Balance;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Invoice;
use App\Models\Mission;
use App\Models\User;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Mail;

class ListingController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $listings = Car::where('user_id',$user_id)->get();

        return view('listings.index',compact('listings'));
    }
    public function createListing(Request $request)
    {
        $listing = new Car();
        $listing->user_id = auth()->user()->id;
        $listing->from_address = $request->FromAddress;
        $listing->to_address = $request->ToAddress;
        $listing->car_type = $request->CarType;
        $listing->car_condition = $request->CarCondition;
        $listing->make_and_model = $request->make_and_model;
        $listing->number_plate = $request->number_plate;
        $listing->seating_capacity = $request->seating_capacity;
        $listing->gear_box = $request->GearBox;
        $listing->selected_package = $request->SelectedPackage;
        $listing->package_amount = $request->PackageAmount;
        $listing->car_move_departure_date_from = $request->CarMoveDepartureDateFrom;
        $listing->car_move_departure_date_to = $request->CarMoveDepartureDateTo;
        $listing->status = 'Available';

        $listing->save();

        $invoice = new Invoice();
        $invoice->user_id = auth()->user()->id;
        $invoice->car_id = $listing->id;
        $invoice->pickup_address = $request->FromAddress;
        $invoice->package = $request->SelectedPackage;
        $invoice->amount = $request->PackageAmount;
        $invoice->status = 'UnPaid';

        $invoice->save();


        $pdf = new Dompdf();
        $pdf->loadHtml(view('pdf.invoice', compact('invoice')));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $pdfContent = $pdf->output();


        Mail::to(auth()->user()->email)->send(new CarListed($listing, $pdfContent));

        return response()->json(['success' => true, 'message' => 'Listing created successfully']);
    }

    public function delete($id)
    {
        Car::where('id',$id)->delete();
        return redirect()->route('listings.index')->with('error','Listing deleted Successfully');
    }

    public function edit($id)
    {
        $listing = Car::where('id',$id)->first();
        return view('listings.edit',compact('listing'));
    }

    public function update($id, Request $request)
    {
        $listing = Car::where('id',$id)->first();
        $listing->make_and_model = $request->make_and_model;
        $listing->number_plate = $request->number_plate;
        $listing->seating_capacity = $request->seating_capacity;
        $listing->gear_box = $request->GearBox;
        $listing->car_move_departure_date_from = $request->CarMoveDepartureDateFrom;
        $listing->car_move_departure_date_to = $request->CarMoveDepartureDateTo;
        $listing->status = $request->status;

        $listing->save();

        return redirect()->route('listings.index')->with('success','Listing Updated Successfully');
    }

    public function cancel($id)
    {
        $currentDate = now();
        $listing = Car::findOrFail($id);
        $mission = Mission::where('car_id', $id)->first();
        $driver = User::findOrFail($mission->user_id);

        if ($listing->car_move_departure_date_from < $currentDate) {
            return redirect()->route('listings.index')->with('error', 'You cannot cancel because the car is now moving.');
        } else {
            $listing->status = 'Available';
            $listing->save();

            Mail::to($driver->email)->send(new RideCancellationNotification($driver->last_name, $listing->make_and_model));

            return redirect()->route('listings.index')->with('success', 'You have cancelled the ride. A cancellation email has been sent to the driver.');
        }
    }

    public function duplicate($id)
    {
        $listing = Car::where('id',$id)->first();
        return view('listings.duplicate',compact('listing'));
    }

    public function duplicateCar($id, Request $request)
    {
        // Find the original listing
        $originalListing = Car::findOrFail($id);

        // Create a new listing and copy all details
        $newListing = new Car();
        $newListing->user_id = auth()->user()->id;
        $newListing->from_address = $originalListing->from_address;
        $newListing->to_address = $originalListing->to_address;
        $newListing->car_type = $originalListing->car_type;
        $newListing->car_condition = $originalListing->car_condition;
        $newListing->make_and_model = $originalListing->make_and_model;
        $newListing->number_plate = $request->number_plate; // Change the number plate
        $newListing->seating_capacity = $originalListing->seating_capacity;
        $newListing->gear_box = $originalListing->gear_box;
        $newListing->selected_package = $originalListing->selected_package;
        $newListing->package_amount = $originalListing->package_amount;
        $newListing->car_move_departure_date_from = $originalListing->car_move_departure_date_from;
        $newListing->car_move_departure_date_to = $originalListing->car_move_departure_date_to;
        $newListing->status = 'Available'; // Change the status

        $newListing->save();

        $invoice = new Invoice();
        $invoice->user_id = auth()->user()->id;
        $invoice->car_id = $newListing->id;
        $invoice->pickup_address = $originalListing->FromAddress;
        $invoice->package = $originalListing->SelectedPackage;
        $invoice->amount = $originalListing->PackageAmount;
        $invoice->status = 'UnPaid';

        $invoice->save();


        $pdf = new Dompdf();
        $pdf->loadHtml(view('pdf.invoice', compact('invoice')));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $pdfContent = $pdf->output();


        Mail::to(auth()->user()->email)->send(new CarListed($newListing, $pdfContent));

        return redirect()->route('listings.index')->with('success', 'Listing duplicated successfully');

    }

    public function confirmDelivery($id)
    {
        $car = Car::leftJoin('missions', 'missions.car_id', '=', 'cars.id')
                    ->where('cars.id',$id)
                    ->select('missions.back_photos as back_photos','missions.front_photos as front_photos','missions.id as mission_id', 'cars.id as car_id')
                    ->first();

        return view('admin.confirm-delivery',compact('car'));
    }

    public function confirm(Request $request)
    {
        $car = Car::find($request->car_id);
        $car->status = 'Completed';
        $car->save();

        $balance = Balance::where('car_id',$request->car_id)->first();
        $balance->status = 'Available';
        $balance->save();

        $mission = Mission::find($request->car_id);
        $driver = User::find($mission->user_id);
        // Send email to driver his delivery is approved and funds are available for withdraw
        Mail::to($driver->email)->send(new DriverDeliveryApprovedNotification($mission, $driver));


        return redirect()->route('listings.index')->with('success', 'Car Delivery Confirmed and completed successfully');


    }

}
