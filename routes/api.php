<?php

use App\Http\Controllers\API\PelangganController;
use App\Http\Controllers\API\PembelianController;
use App\Http\Controllers\API\PinjamanController;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('pelanggan', PelangganController::class);

Route::resource('pengembalian', PembelianController::class);

Route::resource('pinjaman', PinjamanController::class);
