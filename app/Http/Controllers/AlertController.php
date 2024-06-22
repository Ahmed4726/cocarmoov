<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use App\Models\Car;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $alerts = null;
        $trips = [];

        if ($user_id == 1) {
            // Admin user fetches all alerts with pagination
            $alerts = Alert::paginate(10);
        } else {
            // Regular user fetches their own alerts with pagination
            $alerts = Alert::where('user_id', $user_id)->paginate(10);
        }

        // Fetch trips based on each alert's details
        foreach ($alerts as $alert) {
            if ($alert->city_of_collection && $alert->city_of_delivery) {
                $trips[$alert->id] = Car::where('status', 'Available')
                                        ->where('from_address', $alert->city_of_collection)
                                        ->where('to_address', $alert->city_of_delivery)
                                        ->count();
            } else {
                $trips[$alert->id] = Car::where('status', 'Available')
                                        ->where('from_address', $alert->city_of_collection)
                                        ->orWhere('to_address', $alert->city_of_delivery)
                                        ->count();
            }
        }

        return view('admin.alerts', compact('alerts', 'trips'));
    }





    public function addNew(Request $request)
    {
        // dd($request);
        $user_id = auth()->user()->id;

        $alert = new Alert();
        $alert->user_id = $user_id;
        $alert->city_of_collection = $request->cityOfCollection;
        $alert->city_of_delivery = $request->cityOfDelivery;
        $alert->save();


        return response()->json(['message' => 'Record added successfully'], 200);
    }

    public function edit($id)
    {
    // Retrieve role by ID and return the data (you may use Eloquent or your own logic)
    $alert = Alert::find($id);

    // Return the role data as a JSON response
    return response()->json($alert);
    }


    public function update(Request $request, $id)
    {
        // dd($request);
        // Validate the incoming request data
        // $request->validate([
        //     'name' => 'required|unique:permissions,name|string|max:255',
        //     'description' => 'required|string|max:1000',
        // ]);

        // Find the role by ID
        $alert = Alert::find($id);

        // Check if the role exists
        if (!$alert) {
            return response()->json(['error' => 'alert not found'], 404);
        }

        // Update the role directly with the validated data
        $alert->update([
            'city_of_collection' => $request->cityOfCollection,
            'city_of_delivery' => $request->cityOfDelivery,
        ]);

        // Return a success response
        return response()->json(['message' => 'Alert updated successfully']);
    }



    public function destroy($id)
    {
        // Find the role by ID and delete it
        $alert = Alert::find($id);
        $alert->delete();

        // Return a success message or a JSON response
        return response()->json(['message' => 'Permission deleted successfully']);
    }

    public function showMissions($alertId)
    {
        $alert = Alert::find($alertId);
        if (!$alert) {
            return redirect()->back()->with('error', 'Alert not found');
        }

        $missionsQuery = Car::where('status', 'Available');

        if ($alert->city_of_collection && $alert->city_of_delivery) {
            $missionsQuery->where('from_address', $alert->city_of_collection)
                          ->where('to_address', $alert->city_of_delivery);
        } else {
            if ($alert->city_of_collection) {
                $missionsQuery->where('from_address', $alert->city_of_collection);
            }
            if ($alert->city_of_delivery) {
                $missionsQuery->orWhere('to_address', $alert->city_of_delivery);
            }
        }

        $missions = $missionsQuery->get();

        return view('missions.missions', compact('missions'));
    }


}
