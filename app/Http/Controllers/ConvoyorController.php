<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvoyorController extends Controller
{
    public function index()
    {
        return view("frontend.convoyor");
    }
}
