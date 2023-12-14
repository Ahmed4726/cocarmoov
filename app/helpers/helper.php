<?php

function check_persmission($permission_name, $permission_type)
{
    $user = DB::table('users')
    ->leftjoin('user_permissions','user_permissions.user_id','users.id')
    ->where('users.id', $user_id)
    ->where('user_permissions.permission_name', $permission_name)
    ->where('user_permissions.permission_type', $permission_type)
    ->first();
}