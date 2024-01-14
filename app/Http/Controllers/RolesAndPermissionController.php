<?php

namespace App\Http\Controllers;

use App\Models\UserPermission;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesAndPermissionController extends Controller
{
    public function index()
    {
        $role_list = Role::get();
        return view('admin.roles_and_permissions',compact('role_list'));
    }

    public function getPermissions($role_id)
    {
    $permissions = Permission::all();
    $userPermissions = UserPermission::where('role_id', $role_id)->pluck('permission_id')->toArray();

    return response()->json(['permissions' => $permissions, 'userPermissions' => $userPermissions]);
    }

    public function savePermission(Request $request)
    {
        // Assuming permissions are sent as an array in the 'permissions' field of the request
        $permissions = $request->input('permissions', []);

        // Assuming you also have a 'role_id' in the request
        $roleId = $request->input('role_id');

        // Delete existing permissions for the given role
        UserPermission::where('role_id', $roleId)->delete();

        // Save the new permissions
        foreach ($permissions as $permissionId) {
            $newPermission = new UserPermission();
            $newPermission->role_id = $roleId;
            $newPermission->permission_id = $permissionId;
            $newPermission->save();
        }

        // You can return a response if needed
        return response()->json(['message' => 'Permissions saved successfully']);
    }
}
