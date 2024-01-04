<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    //
    public function index()
    {
        return view('forms');
    }

    public function liveDonor()
    {
        return view('forms/live-donor');
    }
}
