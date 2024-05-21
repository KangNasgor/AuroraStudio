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
});
//loggin proses//
Route::get('/sesi', [SessionController::class, 'index'])->name('sesi');
Route::post('/sesi/login', [SessionController::class, 'login'])->name('login.proses');
//register proses//
Route::get('/registrasi', [SessionController::class, 'registrasi'])->name('registrasi');
Route::post('/registrasi.proses', [SessionController::class, 'registrasi_proses'])->name('registrasi.proses');
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
Route::post('/login', [SessionController::class, 'login'])->name('login');
//register proses//
Route::get('/registrasi', [SessionController::class, 'registrasi'])->name('registrasi');
Route::post('/proses', [SessionController::class, 'proses'])->name('proses');

Route::get('/example', function () {
    return view('sesi/example');
})->name('example');
Route::get('/index', function () {
    return view('sesi/index');
})->name('index');







