<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/formwisuda', function () {
    return view('formwisuda');
});

Route::get('/formprewedd', function () {
    return view('formprewedd');
});

Route::get('/formbookingstudio', function () {
    return view('formbookingstudio');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/example', function () {
    return view('example');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/cobacoba', function () {
    return view('cobacoba');
});
