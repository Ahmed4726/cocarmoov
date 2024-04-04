<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user is an admin
        if (!auth()->user()->isAdmin == 1)
            {
                return response()->view('admin.access_denied');
            }

        return $next($request);
    }
}
