<?php

namespace App\Http\Controllers;

use App\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::orderBy('order')->get();
        return view('app.hospital.index', compact('hospitals'));
    }

    public function show($id)
    {
        $hospital = Hospital::find($id);
        $hospitals = Hospital::all();
        return view('app.hospital.show', compact('hospital', 'hospitals'));
    }

}
