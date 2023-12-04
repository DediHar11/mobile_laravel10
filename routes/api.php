<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MasterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Backend'], function(){
    Route::post('daftar',[RegisterController::class,'register'])->name('daftar');
    Route::post('masukaja',[RegisterController::class,'login'])->name('masukaja');
    Route::get('infouser',[RegisterController::class,'userInfo'])->name('infouser');
    
});

Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {
    // Stok Barang
    Route::get('barang', 'ApiBarangController@getSemuaBarang');
    Route::get('barang/{id}', 'ApiBarangController@getBarang');

    // Barang Masuk
    Route::get('barang-masuk', 'ApiBarangController@getSemuaBarangMasuk');
    Route::get('barang-masuk/{id}', 'ApiBarangController@getBarangMasuk');
    Route::post('barang-masuk', 'ApiBarangController@storeBarangMasuk');

    // Barang Keluar
    Route::get('barang-keluar', 'ApiBarangController@getSemuaBarangkeluar');
    Route::get('barang-keluar/{id}', 'ApiBarangController@getBarangkeluar');
    Route::post('barang-keluar', 'ApiBarangController@storeBarangKeluar');
});
