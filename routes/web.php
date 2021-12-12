<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengelolaController;
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

Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/sample', function () {
    return view('sample');
});

Auth::routes();

Route::group(
    ['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });

Route::group(
    ['prefix'=>'user', 'middleware'=>['auth', 'role:member']], function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');
    });

Route::resource('lokasi', LokasiController::class);
Route::resource('barang', BarangController::class);
Route::resource('barang_keluar', BarangKeluarController::class);
Route::resource('peminjaman', PeminjamanController::class);

