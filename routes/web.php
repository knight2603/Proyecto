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
    return view('principal.index');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('template');
});
Route::get('/users', function () {
    return view('pages.users');
});
Route::get('/inventario', function () {
    return view('pages.inventario');
});
Route::get('/configuracion', function () {
    return view('pages.configuracion');
});



