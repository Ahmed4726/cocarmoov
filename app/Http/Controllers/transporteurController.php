<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransporteurController extends Controller
{
    public function index(){
        return view("frontend.transporteurs");
    }
}
