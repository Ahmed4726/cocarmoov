<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();
        return view('admin.permissions', compact('permissions'));
    }

    public function newPermission(Request $request)
    {
    // Validate the request data with custom error messages
    $request->validate([
        'name' => 'required|unique:permissions,name',
        'description' => 'required',
    ], [
        'name.required' => 'The name field is required.',
        'name.unique' => 'The name has already been taken.',
        'description.required' => 'The description field is required.',
    ]);


        // Create a new Role instance
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->display_name = $request->name; // You may want to customize this
        $permission->description = $request->description;

        // Save the new role to the database
        $permission->save();

        return response()->json(['message' => 'Record added successfully'], 200);
    }

    public function edit($id)
    {
    // Retrieve role by ID and return the data (you may use Eloquent or your own logic)
    $role = Permission::find($id);

    // Return the role data as a JSON response
    return response()->json($role);
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|unique:permissions,name|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        // Find the role by ID
        $role = Permission::find($id);

        // Check if the role exists
        if (!$role) {
            return response()->json(['error' => 'Permission not found'], 404);
        }

        // Update the role directly with the validated data
        $role->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Return a success response
        return response()->json(['message' => 'Permission updated successfully']);
    }

    public function destroy($id)
    {
        // Find the role by ID and delete it
        $role = Permission::find($id);
        $role->delete();

        // Return a success message or a JSON response
        return response()->json(['message' => 'Permission deleted successfully']);
    }

}
