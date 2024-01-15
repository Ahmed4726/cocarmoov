<?php

function check_permission($permission_name)
{
    $user_role_id = auth()->user()->role_id;

    // Get the permission id based on the permission name
    $permissionId = DB::table('permissions')
        ->where('name', $permission_name)
        ->value('id');

    if (!$permissionId) {
        // Permission not found
        return false;
    }

    // Check if the user's role has the specified permission
    $hasPermission = DB::table('role_permissions')
        ->where('role_id', $user_role_id)
        ->where('permission_id', $permissionId)
        ->exists();

    return $hasPermission;
}


// function user_role($role)
// {
//     $user = DB::table('users')
//     ->leftjoin('roles','roles.user_id','user.id')
//     ->where('users.user_type',$role)
// }
