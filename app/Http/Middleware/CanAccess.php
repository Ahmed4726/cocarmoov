<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class CanAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $permissionName
     * @return mixed
     */
    public function handle($request, Closure $next, $permissionName)
    {
        $hasPermission = $this->checkPermission($permissionName);

        if (!$hasPermission) {
            // If the user does not have permission, return access denied view
            return response()->view('access_denied');
        }

        return $next($request);
    }

    /**
     * Check if the authenticated user has the specified permission.
     *
     * @param  string  $permissionName
     * @return bool
     */
    private function checkPermission($permissionName)
    {
        $userRoleId = auth()->user()->user_type;

        // Get the permission id based on the permission name
        $permissionId = DB::table('permissions')
            ->where('name', $permissionName)
            ->value('id');

        if (!$permissionId) {
            // Permission not found
            return false;
        }

        // Check if the user's role has the specified permission
        $hasPermission = DB::table('permission_role')
            ->where('role_id', $userRoleId)
            ->where('permission_id', $permissionId)
            ->exists();

        return $hasPermission;
    }
}
