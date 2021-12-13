<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');});

Route::get('/R1', [\App\Http\Controllers\Administrator\UserController::class, 'getUser'] );
Route::get('/R2', [\App\Http\Controllers\Flight\FlightSearchController::class, 'getFlight'] );


