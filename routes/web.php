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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/services', function () {
    return view('turtle-sensors-detail');
});

//Route::get('/turtle-new-sensors-data/{turtle_key}','TurtleSensorsDataController@index');

Route::get('/turtle-detail/{turtle}/view', 'TurtleController@detail');

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth'])->group(function () {

    // admin
    Route::resource('users', 'UserController')->middleware('admin');
    Route::resource('turtles', 'TurtleController')->middleware('admin');

    // member
    Route::get('/users/{user}/profile', 'UserController@profile');

    Route::get('/my-devices', 'TurtleController@index');
    Route::get('/turtles/{turtle}/show','TurtleController@show');
    Route::get('/users/{user}/add-new-device','TurtleController@create');
    Route::post('/users/{user}/store-new-device','TurtleController@store');
});

