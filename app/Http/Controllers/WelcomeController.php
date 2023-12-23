<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()  {
        $showSweetAlert = false;
        if (Auth::check()) {
            $showSweetAlert = true;
            return view('welcome', compact('showSweetAlert'));
        }
        return view('welcome', compact('showSweetAlert'));
    }

    public function sweetalert()
    {
        // dd("ok");
            if (!Auth::check()) {
            $showSweetAlert = true;
            return view('welcome', compact('showSweetAlert'));
        }
    }
}
