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

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/account', function () {
    return view('account');
});
Route::get('/example', function () {
    return view('example');
});
//loggin proses//
Route::get('/sesi', [SessionController::class, 'index'])->name('sesi');
Route::post('/sesi/login', [SessionController::class, 'login'])->name('login.proses');
//register proses//
Route::get('/registrasi', [SessionControllerController::class, 'registrasi'])->name('registrasi');
Route::post('/registrasi.proses', [SessionControllerController::class, 'registrasi_proses'])->name('registrasi.proses');
