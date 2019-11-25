<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search-turtles', 'TurtleController@searchTurtles');
Route::get('/get-turtle-info/{turtle_key}','TurtleSensorsDataController@getTurtleKey');
Route::get('/get-last-entry-id/{turtle_key}/new-data','TurtleDataLastEntryIdController@lastEntryId');


Route::get('/api/turtle-detail/{turtle}/view/{last_entry_id}', 'TurtleController@detail');

Route::get('/api-get-air-temp','TurtleSensorsDataController@getAirTemp');

Route::post('/sensors-data',function (Request $request){
    \Illuminate\Support\Facades\Storage::append('ardunio-log.txt',$request);
});
