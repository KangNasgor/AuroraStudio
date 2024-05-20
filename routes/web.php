<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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


//  Route::Controllers(LatihanController::class)->group(function(){
//     Route::get('/login','login')->name('login.login');
//     Route::get('/register')->name('login');

//  });
// login proses//
Route::get('/sesi', [SessionController::class, 'index'])->name('sesi');
Route::post('/sesi/login', [SessionController::class, 'login'])->name('login.proses');
//register proses//
Route::get('/registrasi', [SessionControllerController::class, 'registrasi'])->name('registrasi');
Route::post('/registrasi.proses', [SessionControllerController::class, 'registrasi_proses'])->name('registrasi.proses');







