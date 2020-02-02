<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('app.hotel.index', compact('hotels'));
    }

    public function show($id)
    {
        $hotel = Hotel::find($id);
        return view('app.hotel.show', compact('hotel'));
    }

}
