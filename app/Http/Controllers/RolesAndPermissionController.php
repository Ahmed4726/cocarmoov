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

}
