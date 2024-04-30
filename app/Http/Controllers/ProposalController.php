<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $user_type = auth()->user()->user_type;
        if($user_type == '4' || $user_type == '5')
        {
            $proposals = Proposal::leftJoin('cars', 'cars.id', '=', 'proposals.car_id')
                    ->where('proposals.owner_id', $user_id)
                    ->select('cars.car_type as car_type',
                             'cars.package_amount as actual_amount',
                             'proposals.offer_amount as offer_amount',
                             'proposals.pick_up_time as pick_up_time',
                             'proposals.delivery_time as delivery_time',
                             'proposals.status as status',
                             'proposals.id as proposal_id',
                             'proposals.car_id as car_id')
                    ->get();
            return view('admin.proposals_approvals',compact('proposals'));
        }
        $proposals = Proposal::leftJoin('cars', 'cars.id', '=', 'proposals.car_id')
        ->where('proposals.driver_id', $user_id)
        ->select('cars.car_type as car_type',
                 'cars.package_amount as actual_amount',
                 'proposals.offer_amount as offer_amount',
                 'proposals.pick_up_time as pick_up_time',
                 'proposals.delivery_time as delivery_time',
                 'proposals.status as status',
                 'proposals.id as proposal_id',
                 'proposals.car_id as car_id')
        ->get();
        // $proposals = Proposal::where('driver_id',$user_id)->get();
        return view('admin.proposals',compact('proposals'));
    }

    public function addProposals(Request $request)
    {
        $validate = Proposal::where('driver_id', auth()->user()->id)->where('car_id', $request->car_id)->exists();
        if($validate == true)
        {
            return redirect()->back()->with('success','You already make an offer on this car.');
        }
        // dd($request);
        $proposals = new Proposal();
        $proposals->owner_id = $request->owner_id;
        $proposals->car_id = $request->car_id;
        $proposals->offer_amount = $request->offer_amount;
        $proposals->driver_id = auth()->user()->id;
        $proposals->pick_up_time = $request->pick_up_time;
        $proposals->delivery_time = $request->delivery_time;
        $proposals->status = 'Pending';

        $proposals->save();

        // email send to car owner for offer


        return redirect()->back()->with('success','Offer Sent Successfully');
    }

    public function updateStatus(Request $request)
    {
        if($request->status == 'Accept')
        {
            $car = Car::find($request->car_id);
            $car->status = 'Booked';

            $car->save();
        }

        $proposal = Proposal::find($request->proposal_id);
        $proposal->status = $request->status.'ed';

        $proposal->save();

        return response()->json(['success' => "Offer {$request->status}ed successfully."]);

    }
}

