<?php

use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use App\Models\Pengembalian;
use App\Models\Peminjaman;
use App\Models\Pelanggan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

Route::get('/pinjaman', function () {
    return view('pinjaman');
})->middleware(['auth'])->name('pinjaman');

Route::get('/pengembalian', function () {
    return view('pengembalian');
})->middleware(['auth'])->name('pengembalian');

Route::get('/analisis', function () {
    return view('layouts.analisis');
})->middleware(['auth'])->name('analisis');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/user', [PelangganController::class, 'index'])
        ->name('user');
    
    Route::delete('/user-delete/{id}', [PelangganController::class, 'destroy'])
        ->name('user-delete');

    Route::get('/user-create', [PelangganController::class, 'create'])
        ->name('user-create');

    Route::post('/user-create', [PelangganController::class, 'store'])
        ->name('user-create');

    Route::get('/user-edit/{id}', [PelangganController::class, 'edit'])
        ->name('user-edit');

    Route::put('/user-edit/{id}', [PelangganController::class, 'update'])
        ->name('user-edit');
});

require __DIR__.'/auth.php';