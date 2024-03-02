<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

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

        $listing->save();
    }
}
