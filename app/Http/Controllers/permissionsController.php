<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class permissionsController extends Controller
{
    public function index()
    {
        return view('admin.permissions');
    }
}
