<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/hotels', function () {
    return view('hotels');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hotel-view', function () {
    return view('hotel-view');
});

Route::get('/treatments', function () {
    return view('treatments');
});

Route::get('/treatment-view', function () {
    return view('treatment-view');
});
