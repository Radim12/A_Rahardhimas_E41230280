<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\registerController;

use App\Http\Controllers\PengalamanKerjaController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ManagementUserController;



//memanggil view lewat controller (data dari controller)
// Route::get('dhimas', [dhimasController::class, 'index']);
// Route::get('air', [airController::class, 'index']);
// Route::get('biodata', [airController::class, 'biodata']);

//request data dari url
// Route::get('dhimas/{nama}', [dhimasController::class, 'getNama']);

//request data dari inputan
// Route::get('pendaftaran', [dhimasController::class, 'pendaftaran']);
// Route::post('pendaftaran/proses', [dhimasController::class, 'proses']);

// Route::get('/', [blogController::class, 'home']);
// Route::get('tentang', [blogController::class, 'tentang']);
// Route::get('kontak', [blogController::class, 'kontak']);


//acara 5
// Route untuk menampilkan form tambah user
Route::get('/users/create', [ManagementUserController::class, 'create'])->name('users.create');
// Route untuk menyimpan data user baru
Route::post('/users', [ManagementUserController::class, 'store'])->name('users.store');
// Route untuk menampilkan detail user berdasarkan ID
Route::get('/users/{id}', [ManagementUserController::class, 'show'])->name('users.show');
// Route untuk menampilkan form edit user berdasarkan ID
Route::get('/users/{id}/edit', [ManagementUserController::class, 'edit'])->name('users.edit');
// Route untuk mengupdate data user berdasarkan ID
Route::put('/users/{id}', [ManagementUserController::class, 'update'])->name('users.update');
// Route untuk menghapus data user berdasarkan ID
Route::delete('/users/{id}', [ManagementUserController::class, 'destroy'])->name('users.destroy');

//acara 6
Route::get('/acara6', function () {
    return view('acara6');
});

// //acara 7
Route::get('/acara7', function () {
    return view('welcome');
});

//acara 8
Route::get('/acara8', function () {
    return view('acara9/index');
});

//acara 11
Route::get('/acara11', [loginController::class, 'login'])->name('login');
Route::get('/', [loginController::class, 'login'])->name('login');
Route::post('actionlogin', [loginController::class, 'actionlogin'])->name('actionlogin');
//registrasi/daftar
route::get('register', [registerController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
//logout
Route::get('actionlogout', [loginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


//acara 13
Route::get('home', [homeController::class, 'index'])->name('home')->middleware('auth');

//Acara 14-16
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('pengalaman-kerja', PengalamanKerjaController::class);

//acara 17
Route::get('/session/create', [SessionController::class, 'create']);
Route::get('/session/show', [SessionController::class, 'show']);
Route::get('/session/delete', [SessionController::class, 'delete']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

//acara 18
Route::get('/formulir', function () {
    return view('formulir');
});
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//acara 19
Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
Route::post('/upload/proses', [UploadController::class, 'proses_upload'])->name('upload.proses');

//acara 20
// Route untuk menampilkan halaman Dropzone
Route::get('/dropzone', [UploadController::class, 'dropzone'])->name('dropzone');
// Route untuk menangani upload file
Route::post('/dropzone/store', [UploadController::class, 'dropzoneStore'])->name('dropzone.store');
// Route untuk menampilkan halaman pdf
Route::get('/pdf_upload', [UploadController::class, 'pdf_upload'])->name('pdf.upload');
Route::post('/pdf/store', [UploadController::class, 'pdf_store'])->name('pdf.store');
