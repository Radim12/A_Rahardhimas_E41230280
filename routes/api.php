<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ApiPendidikanController; // Tambahkan ini

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Rute default untuk mendapatkan informasi user yang terautentikasi
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Grup rute untuk ApiPendidikanController
Route::group([], function () {
    // Mendapatkan semua data pendidikan
    Route::get('api_pendidikan', [ApiPendidikanController::class, 'getAll']);

    // Mendapatkan data pendidikan berdasarkan ID
    Route::get('api_pendidikan/{id}', [ApiPendidikanController::class, 'getPen']);

    // Menambahkan data pendidikan baru
    Route::post('api_pendidikan', [ApiPendidikanController::class, 'createPen']);

    // Mengupdate data pendidikan berdasarkan ID
    Route::put('api_pendidikan/{id}', [ApiPendidikanController::class, 'updatePen']);

    // Menghapus data pendidikan berdasarkan ID
    Route::delete('api_pendidikan/{id}', [ApiPendidikanController::class, 'deletePen']);
});
