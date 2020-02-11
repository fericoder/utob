<?php

namespace App\Http\Controllers;

use App\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        $treatments = Treatment::all();
        return view('app.treatment.index', compact('treatments'));
    }

    public function show($id)
    {
        $treatment = Treatment::find($id);
        $treatments = Treatment::all()->random(15);
        return view('app.treatment.show', compact('treatment', 'treatments'));
    }

}
