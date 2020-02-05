<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('app.package.index', compact('packages'));
    }

    public function show($id)
    {
        $package = Package::find($id);
        return view('app.package.show', compact('package'));
    }

}
