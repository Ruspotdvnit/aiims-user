<?php

namespace App\Http\Controllers;

use App\Models\LiveDonor;
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
        // $result = LiveDonor::create([
        //     'name' => 'Rus',
        //     'val' => 'potd'
        // ]);

        // $result->save();

        //$result = LiveDonor::all();

        return view('forms/live-donor'); //, ['result' => $result]);
    }

    public function liveDonorDemo()
    {
        return view('forms/live-donor-demographic');
    }
}
