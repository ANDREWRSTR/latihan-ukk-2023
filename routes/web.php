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

Route::get('/home', [KasirController::class, 'home']);


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'proses_login']);

Route::get('/registrasi', [RegistrasiController::class, 'registrasi']);
Route::post('/registrasi', [RegistrasiController::class, 'proses_registrasi']);


Route::get('/pelanggan', [KasirController::class, 'pelanggan']);
Route::get('/tambahproduk', [KasirController::class, 'tambahproduk']);
Route::post('/tambahproduk', [KasirController::class, 'prosestambah']);

Route::get('/hapus_produk/{id}', [KasirController:: class, 'hapus']);

Route::get('/update_produk/{id}', [KasirController::class, 'update']);
Route::post('/update_produk/{id}', [KasirController::class, 'proses_update']);

Route::get('/penjualan', [KasirController::class, 'penjualan']);

Route::get('/detail_produk/{id}', [KasirController::class, 'detail']);

Route::get('/logout',[LoginController::class,'logout']);

 Route::middleware(['auth'])->group(function(){
    Route::get('/produk', [KasirController::class, 'produk']);

 });









