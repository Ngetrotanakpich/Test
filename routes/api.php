<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API_Controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index',[API_Controller::class,"index"]);

Route::post('/sign_up',[API_Controller::class,"Sign_up"]);

Route::post('/sign_in',[API_Controller::class,"Sign_in"]);

Route::get('/index2',[API_Controller::class,"index2"]);

Route::post('/booking',[API_Controller::class,"Booking"]);

Route::post('/china',[API_Controller::class,"China_cmt"]);

Route::post('/switzerland',[API_Controller::class,"Switzerland_cmt"]);

Route::post('/thailand',[API_Controller::class,"Thailand_cmt"]);
