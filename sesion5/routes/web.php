<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto;

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
Route::get('/homepage', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('welcome');
});
Route::get('/bienvenido', function () {
    return view('welcome');
});



Route::get('productos', [Producto::class, 'mostrarProductos']);