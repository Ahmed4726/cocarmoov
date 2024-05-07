<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = auth()->user()->isAdmin;
        if ($admin == 1)
        {
            return redirect()->route('admin_dashboard');
        }
        else
        {
            $ongoing_cars = Car::where('status','On-Move')->where('user_id',auth()->user()->id)->count();
            return view('admin.admin_dashboard', compact('ongoing_cars')); // For end users.
        }
    }

    public function adminDashboard(): View
    {
        return view('admin.admin_main_dashboard'); // For admins
    }
    
}
