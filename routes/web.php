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

Route::get('/', function () {
    return view('index');
});
Route::get('/accesorios', function () {
    return view('accesorios');
});
Route::get('/audio', function () {
    return view('audio');
});
Route::get('/celulares', function () {
    return view('celulares');
});
Route::get('/computo', function () {
    return view('computo');
});
Route::get('/consumibles', function () {
    return view('consumibles');
});
Route::get('/tienda', function () {
    return view('tienda');
});
Route::get('/soporte', function () {
    return view('soporte');
});
Route::get('/mapa', function () {
    return view('mapa');
});
Route::get('/escritorio', function () {
    return view('computo.escritorio');
});
Route::get('/portatil', function () {
    return view('computo.portatil');
});
Route::get('/servidor', function () {
    return view('computo.servidor');
});
Route::get('/tablets', function () {
    return view('computo.tablets');
});
