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

Route::get('/Hospitals', function () {
    return view('Hospitals');
});

Route::get('/hospital-view', function () {
    return view('hospital-view');
});

Route::get('/Customer-Experience', function () {
    return view('Customer-Experience');
});

Route::get('/Customer-view', function () {
    return view('Customer-view');
});













Route::namespace('Dashboard')->prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('profile', 'ProfileController@edit')->name('profile.index');;
    Route::post('profile', 'ProfileController@update');
    Route::post('profile/password', 'ProfileController@password');
    Route::post('profile/avatar', 'ProfileController@avatar');

    Route::resource('index', 'DashboardController');
    Route::resource('incomes', 'IncomeController');
    Route::resource('setting', 'SettingController');
    Route::resource('slide', 'SlideController');
    Route::resource('post', 'PostController');
    Route::resource('course', 'CourseController');
    Route::any('course/delete', 'CourseController@destroy');
    Route::post('course/addSection', 'CourseController@addSection')->name('course.addSection');
    Route::post('course/addEpisode', 'CourseController@addEpisode')->name('course.addEpisode');
    Route::any('course/section/delete', 'CourseController@sectionDestroy');
    Route::any('course/episode/delete', 'CourseController@episodeDestroy');
    Route::resource('user', 'UserController');
    Route::resource('teacher', 'TeacherController');
    Route::resource('category', 'CategoryController');
    Route::resource('course_request', 'CourseRequestController');
    Route::resource('roles', 'RoleController');
    Route::resource('socials', 'SocialController');
    Route::resource('permissions', 'PermissionController');
    Route::get('comment/notApproved', 'CommentController@notApproved')->name('comment.notApproved');
    Route::post('comment/delete', 'CommentController@destroy');
    Route::post('post/delete', 'PostController@destroy');
    Route::post('role/delete', 'RoleController@destroy');
    Route::post('social/delete', 'SocialController@destroy');
    Route::post('permission/delete', 'PermissionController@destroy');
    Route::get('comment/approve/{id}/{commentable}', 'CommentController@approve')->name('comment.approve');
    Route::resource('comment', 'CommentController');
    Route::get('/dashboard/ckeditorUpload', 'PostController@ckeditorUpload');
});
Auth::routes();
