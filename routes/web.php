<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dhimasController;
use App\Http\Controllers\airController;
use App\Http\Controllers\blogController;

use App\Http\Controllers\loginController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('blog', function () {
//     return view('blog');
// });

// //memanggil view lewat controller (data dari controller)
// Route::get('dhimas', [dhimasController::class, 'index']);
// Route::get('air', [airController::class, 'index']);
// Route::get('biodata', [airController::class, 'biodata']);

// //request data dari url
// Route::get('dhimas/{nama}', [dhimasController::class, 'getNama']);

// //request data dari inputan
// Route::get('pendaftaran', [dhimasController::class, 'pendaftaran']);
// Route::post('pendaftaran/proses', [dhimasController::class, 'proses']);

// Route::get('/', [blogController::class, 'home']);
// Route::get('tentang', [blogController::class, 'tentang']);
// Route::get('kontak', [blogController::class, 'kontak']);

//route login dengan database
Route::get('/', [loginController::class, 'login'])->name('login');
Route::post('actionlogin', [loginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [homeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [loginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');