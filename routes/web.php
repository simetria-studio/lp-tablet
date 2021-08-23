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

// TABLET 

// Route::get('/layout', function () {
//     return view('layouts.t-main');
// });
Route::get('/', function () {
    return view('tablet.home');
});
Route::get('/sobre', function () {
    return view('tablet.sobre');
});
Route::get('/registrar', function () {
    return view('tablet.registrar');
});

