<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;


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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'proses_login']);

Route::get('/registrasi', [RegistrasiController::class, 'registrasi']);
Route::post('/registrasi', [RegistrasiController::class, 'proses_registrasi']);





 Route::middleware(['auth'])->group(function(){
    Route::get('/home', [KasirController::class, 'home']);

    Route::get('/produk', [KasirController::class, 'produk']);

    Route::get('/tambahproduk', [KasirController::class, 'tambahproduk']);
    Route::post('/tambahproduk', [KasirController::class, 'prosestambah']);

    Route::get('/detail_produk/{id}', [KasirController::class, 'detail']);

    Route::get('/update_produk/{id}', [KasirController::class, 'update']);
    Route::post('/update_produk/{id}', [KasirController::class, 'proses_update']);

    Route::get('/hapus_produk/{id}', [KasirController:: class, 'hapus']);

    Route::get('/pelanggan', [KasirController::class, 'pelanggan']);

    Route::get('/tambahpelanggan', [KasirController::class, 'tambah_pelanggan']);
    Route::post('/tambahpelanggan', [KasirController::class, 'proses_tambah_pelanggan']);

    Route::get('/detail_pelanggan/{id}', [KasirController::class, 'detailpelanggan']);

    Route::get('/update_pelanggan/{id}', [KasirController::class, 'updatepelanggan']);
    Route::post('/update_pelanggan/{id}', [KasirController::class, 'proses_update_pelanggan']);

    Route::get('/hapus_pelanggan/{id}', [KasirController:: class, 'hapuspelanggan']);

    Route::get('/penjualan', [KasirController::class, 'penjualan']);

    Route::get('/logout',[LoginController::class,'logout']);


 });









