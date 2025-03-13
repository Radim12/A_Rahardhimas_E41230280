<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dhimasController;
use App\Http\Controllers\airController;
use App\Http\Controllers\blogController;

use App\Http\Controllers\loginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\registerController;


// //acara 7
Route::get('/acara7', function () {
    return view('welcome');
});

//acara 8
Route::get('/acara8', function () {
    return view('acara9/index');
});

// Route::get('blog', function () {
//     return view('blog');
// });

//memanggil view lewat controller (data dari controller)
Route::get('dhimas', [dhimasController::class, 'index']);
Route::get('air', [airController::class, 'index']);
Route::get('biodata', [airController::class, 'biodata']);

//request data dari url
Route::get('dhimas/{nama}', [dhimasController::class, 'getNama']);

//request data dari inputan
Route::get('pendaftaran', [dhimasController::class, 'pendaftaran']);
Route::post('pendaftaran/proses', [dhimasController::class, 'proses']);

Route::get('/', [blogController::class, 'home']);
Route::get('tentang', [blogController::class, 'tentang']);
Route::get('kontak', [blogController::class, 'kontak']);




// STRUKTUR WEBSITE AWAL

//route login dengan database
Route::get('/', [loginController::class, 'login'])->name('login');
Route::post('actionlogin', [loginController::class, 'actionlogin'])->name('actionlogin');

//home
Route::get('home', [homeController::class, 'index'])->name('home')->middleware('auth');
//logout
Route::get('actionlogout', [loginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//registrasi/daftar
route::get('register', [registerController::class,'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');