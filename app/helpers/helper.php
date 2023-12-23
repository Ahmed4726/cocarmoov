<?php

function check_persmission($permission_name, $permission_type)
{
    $user_id = auth()->user()->id;
    $user = DB::table('users')
    ->leftjoin('user_permissions','user_permissions.user_id','users.id')
    ->where('users.id', $user_id)
    ->where('user_permissions.permission_name', $permission_name)
    ->where('user_permissions.permission_type', $permission_type)
    ->first();
    return $user !== null; 
}

// function user_role($role)
// {
//     $user = DB::table('users')
//     ->leftjoin('roles','roles.user_id','user.id')
//     ->where('users.user_type',$role)
// }