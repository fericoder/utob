<?php

namespace App\Http\Controllers;

use App\Treatment;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $treatments = Treatment::where('home', 1)->get();
        return view('app.index', compact('treatments'));
    }

    public function about()
    {
        return view('app.about');
    }


    public function contact()
    {
        return view('app.contact');
    }

}
