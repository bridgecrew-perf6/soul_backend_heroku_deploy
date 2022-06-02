<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Item url
Route::resource('v1/items', 'ItemController');


// Simpleplay URL
Route::get('v1/getuserbalance', 'SimpleplayController@getUserBalance');
Route::get('v1/placebet', 'SimpleplayController@placeBet');
Route::get('v1/playwin', 'SimpleplayController@playWin');
Route::get('v1/playlost', 'SimpleplayController@playLost');
Route::get('v1/placebetcancel', 'SimpleplayController@placeBetCancel');