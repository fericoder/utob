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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/contact', 'IndexController@contact')->name('contact');

Route::get('/packages', 'PackageController@index')->name('packages');
Route::get('/packages/{id}', 'PackageController@show')->name('package');

Route::get('/hotels', 'HotelController@index')->name('hotels');
Route::get('/hotels/{id}', 'HotelController@show')->name('hotel');

Route::get('/treatments', 'TreatmentController@index')->name('treatments');
Route::get('/treatments/{id}', 'TreatmentController@show')->name('treatment');

Route::get('/hospitals', 'HospitalController@index')->name('hospitals');
Route::get('/hospitals/{id}', 'HospitalController@show')->name('hospital');

Route::get('/experiences', 'ExperienceController@index')->name('experiences');
Route::get('/experiences/{id}', 'ExperienceController@show')->name('experience');

Route::get('/blogs', 'BlogController@index')->name('blogs');
Route::get('/blogs/{id}', 'BlogController@show')->name('blog');

Route::get('/doctors', 'DoctorController@index')->name('doctors');
Route::get('/doctors/{id}', 'DoctorController@show')->name('doctor');



Route::get('/services', function() {
  return view('app.services');
});

Route::get('/form', function() {
    return view('app.form');
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
    Route::resource('treatment', 'TreatmentController');
    Route::any('treatment/delete', 'TreatmentController@destroy');
    Route::resource('doctor', 'DoctorController');
    Route::any('doctor/delete', 'DoctorController@destroy');
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
