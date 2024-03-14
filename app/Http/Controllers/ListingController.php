<?php

namespace App\Http\Controllers;

use App\Mail\CarListed;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Invoice;
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
        $listing = Car::where('id',$id)->delete();
        return redirect()->route('listings.index');
    }
}
