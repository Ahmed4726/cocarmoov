<?php

namespace App\Http\Controllers;

use App\Mail\OfferAcceptedMail;
use App\Models\Car;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProposalController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $user_type = auth()->user()->user_type;
        if($user_type == '4' || $user_type == '5')
        {
            $proposals = Proposal::leftJoin('cars', 'cars.id', '=', 'proposals.car_id')
                                    // ->where('proposals.status', '=', 'Pending')
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
        $validate = Proposal::where('driver_id', auth()->user()->id)
                            ->where('car_id', $request->car_id)
                            ->exists();

        if ($validate == true) {
            return redirect()->back()->with('success', 'You already made an offer on this car.');
        }

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
        $owner = User::find($request->owner_id); // Assuming owner is a User model
        $car = Car::find($request->car_id); // Assuming car is a Car model
        $data = [
            'owner' => $owner->name,
            'driver' => auth()->user()->family_name,
            'car' => $car->name,
            'offer_amount' => $request->offer_amount,
            'pick_up_time' => $request->pick_up_time,
            'delivery_time' => $request->delivery_time,
        ];

        Mail::send('emails.proposal', $data, function ($message) use ($owner) {
            $message->to($owner->email)
                    ->subject('Good News! You received an Offer.');
        });

        return redirect()->back()->with('success', 'Offer Sent Successfully');
    }

    public function updateStatus(Request $request)
    {
        if($request->status == 'Accept')
        {
            $car = Car::find($request->car_id);
            $car->status = 'Booked';
            $car->save();

            // send email to driver here if offer accepted
            $proposal = Proposal::find($request->proposal_id);
            $driver = User::find($proposal->driver_id);
            Mail::to($driver->email)->send(new OfferAcceptedMail($proposal, $car, $driver));
        }

        $proposal = Proposal::find($request->proposal_id);
        $proposal->status = $request->status.'ed';
        $proposal->save();

        return response()->json(['success' => "Offer {$request->status}ed successfully."]);
    }

}

