<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        //
    }

    public function addProposals(Request $request)
    {
        // dd($request);
        $proposals = new Proposal();
        $proposals->owner_id = $request->owner_id;
        $proposals->car_id = $request->car_id;
        $proposals->offer_amount = $request->offer_amount;
        $proposals->driver_id = auth()->user()->id;

        $proposals->save();

        return redirect()->back()->with('success','Offer Sent Successfully');
    }
}

