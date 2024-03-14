<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class InvoiceController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $invoices = null;

        if($user_id == 1)
        {
            $invoices = Invoice::leftJoin('users','users.id','=','invoices.user_id')
                                ->leftJoin('cars','cars.id','=','invoices.car_id')
                                ->select('invoices.id','invoices.pickup_address','users.last_name','users.family_name','invoices.amount','invoices.status','cars.to_address')
                                ->get();
        }
        else
        {
            $invoices = Invoice::where('user_id',$user_id)->get();
        }

        return view("admin.invoices",compact('invoices'));
    }

    public function view($id)
    {
        $invoice = Invoice::leftJoin('users', 'users.id', '=', 'invoices.user_id')
                            ->leftJoin('cars','cars.id','=','invoices.car_id')
                            ->select('invoices.id','invoices.pickup_address','users.last_name','users.family_name','invoices.amount','invoices.status','cars.to_address')
                            ->where('invoices.id', $id)
                            ->first();

        // Check if the invoice exists
        if (!$invoice) {
            return abort(404); // You may customize the error response based on your needs
        }

        // Generate PDF content using Laravel DomPDF with a Blade view
        $pdfContent = PDF::loadView('pdf.invoice', ['invoice' => $invoice])->output();

        // Set headers for PDF file
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        // Stream the PDF content in the next tab
        return Response::stream(
            function () use ($pdfContent) {
                echo $pdfContent;
            },
            200,
            $headers
        );
    }

}
