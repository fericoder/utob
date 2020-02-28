<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('app.exprience.index', compact('experiences'));
    }

    public function show($id)
    {
        $experience = Experience::find($id);
        $experiences = Experience::all();
        return view('app.exprience.show', compact('experience', 'experiences'));
    }

}
