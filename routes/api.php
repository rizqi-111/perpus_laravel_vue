<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::GET('read','App\Http\Controllers\BookController@getAll');
Route::GET('show/{id}','App\Http\Controllers\BookController@show');
Route::POST('addbook','App\Http\Controllers\BookController@store');
Route::PUT('update/{id}','App\Http\Controllers\BookController@update');
Route::DELETE('destroy/{id}','App\Http\Controllers\BookController@destroy');