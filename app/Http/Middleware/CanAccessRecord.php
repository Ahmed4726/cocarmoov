<?php

namespace App\Http\Middleware;

use App\Models\Alert;
use App\Models\Car;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CanAccessRecord
{
    public function handle(Request $request, Closure $next, $recordType)
    {
        // Get the ID of the record from the route parameters
        $recordId = $request->route('id');

        // Check if the authenticated user is allowed to access the record
        if (!Auth::check() || !$this->userCanAccessRecord(Auth::user(), $recordType, $recordId)) {
            // Unauthorized access - Redirect or return an error message
            return response()->view('recordAccessDenied');
        }

        return $next($request);
    }

    protected function userCanAccessRecord($user, $recordType, $recordId)
    {
        // Implement your logic here to check if the user can access the record
        switch ($recordType) {
            case 'listing':
                return $user->id === Car::find($recordId)->user_id;
            case 'alert':
                return $user->id === Alert::find($recordId)->user_id;
            // case 'profile':
                // return $user->id === ::find($recordId)->user_id;
            case 'booking':
                return $user->id === Car::find($recordId)->user_id;
            // Add more cases for other record types as needed
            default:
                return false;
        }
    }
}
