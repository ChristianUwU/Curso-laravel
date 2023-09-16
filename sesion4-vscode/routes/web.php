<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Prueba;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', '\App\Http\Controllers\Prueba@desplegar');
Route::get('/hello', '\App\Http\Controllers\Prueba@hello');
