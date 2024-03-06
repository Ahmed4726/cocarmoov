<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Car::get();
        return view('missions.index',compact('missions'));
    }

    public function booking($id)
    {
        $mission = Car::where('id',$id)->first();
        return view('missions.booking',compact('mission'));
    }
}
