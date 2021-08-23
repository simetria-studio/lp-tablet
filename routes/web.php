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
// DESKTOP 

Route::get('/layout', function () {
    return view('layouts.main');
});
Route::get('/', function () {
    return view('desktop.home');
});
Route::get('/sobre', function () {
    return view('desktop.sobre');
});
Route::get('/descarregar', function () {
    return view('desktop.descarregar');
});
Route::get('/registrar', function () {
    return view('desktop.registrar');
});

// TABLET 

Route::get('/tlayout', function () {
    return view('layouts.t-main');
});
Route::get('/t-home', function () {
    return view('tablet.home');
});
Route::get('/t-sobre', function () {
    return view('tablet.sobre');
});
Route::get('/t-registrar', function () {
    return view('tablet.registrar');
});

// MOBILE

Route::get('/mlayout', function () {
    return view('layouts.m-main');
});
Route::get('/mhome', function () {
    return view('mobile.home');
});
Route::get('/msobre', function () {
    return view('mobile.sobre');
});
Route::get('/mdescarregar', function () {
    return view('mobile.descarregar');
});