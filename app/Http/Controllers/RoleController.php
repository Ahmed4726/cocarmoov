<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::get();
        return view('admin.roles', compact('roles'));
    }


    public function newRole(Request $request)
    {
        // dd($request);
    // Validate the request data with custom error messages
    $request->validate([
        'name' => 'required|unique:roles,name',
        'description' => 'required',
    ], [
        'name.required' => 'The name field is required.',
        'name.unique' => 'The name has already been taken.',
        'description.required' => 'The description field is required.',
    ]);


        // Create a new Role instance
        $role = new Role();
        $role->name = $request->name;
        $role->display_name = $request->name; // You may want to customize this
        $role->description = $request->description;

        // Save the new role to the database
        $role->save();

        return response()->json(['message' => 'Record added successfully'], 200);
    }


    public function edit($id)
    {
    // Retrieve role by ID and return the data (you may use Eloquent or your own logic)
    $role = Role::find($id);

    // Return the role data as a JSON response
    return response()->json($role);
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        // Find the role by ID
        $role = Role::find($id);

        // Check if the role exists
        if (!$role) {
            return response()->json(['error' => 'Role not found'], 404);
        }

        // Update the role directly with the validated data
        $role->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Return a success response
        return response()->json(['message' => 'Role updated successfully']);
    }



    public function destroy($id)
    {

        $role = Role::find($id);
        $role->delete();

        return response()->json(['message' => 'Role deleted successfully']);
    }


}
