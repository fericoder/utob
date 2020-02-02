<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('app.doctor.index', compact('doctors'));
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('app.doctor.show', compact('doctor'));
    }


}
