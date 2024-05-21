<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
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

Route::get('/example', function () {
    return view('example');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/', function (){
    return redirect('/login');
});
Route::controller(BookingController::class)->group(function () {
    Route::get('/infopesanan','infopesanan')->name('infopesanan.index');
    Route::get('/formbooking','form')->name('form.index');
    Route::post('/formbooking/kirim','formStore')->name('form.store');

});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/account', function () {
    return view('account');
});
Route::get('/example', function () {
    return view('example');
})->name('example');
// login proses//
Route::get('/sesi', [SessionController::class, 'index'])->name('sesi');
Route::post('/login', [SessionController::class, 'login'])->name('login');
//register proses//
Route::get('/registrasi', [SessionController::class, 'registrasi'])->name('registrasi');
Route::post('/proses', [SessionController::class, 'proses'])->name('proses');

Route::get('/index', function () {
    return view('sesi/index');
})->name('index');







