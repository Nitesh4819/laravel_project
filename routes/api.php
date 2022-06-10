<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\FromController;

/*
|--------------------------------------------------------------------------
| API Routes
|-------------------------------------------------------------------------
  Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('data',[FromController::class,'getdata']);//data get to create api

Route::post('addata',[FromController::class,'addata']);//form sumbit creating routes
Route::post('update',[FromController::class,'updates']);// data update api creating
Route::post('delt',[FromController::class,'delt']);