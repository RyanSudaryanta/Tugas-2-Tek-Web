<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

Route::get('/kontakPesan', function () {
    return view('kontakPesan');
})->middleware(['auth'])->name('kontakPesan');

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->middleware(['auth'])->name('pembayaran');

require __DIR__.'/auth.php';