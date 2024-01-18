<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $alert = null;
        if($user_id == 1)
        {
            $alerts = Alert::simplepaginate(10);
        }
        else
        {
            $alerts = Alert::where('user_id',$user_id)->paginate(10);
        }
        return view('admin.alerts',compact('alerts'));
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
        return response()->json(['message' => 'Permission updated successfully']);
    }



    public function destroy($id)
    {
        // Find the role by ID and delete it
        $alert = Alert::find($id);
        $alert->delete();

        // Return a success message or a JSON response
        return response()->json(['message' => 'Permission deleted successfully']);
    }
}
