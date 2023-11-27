<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    return view('auth.masuk');
});

Route::get('/dashboard', function () {
    return view('beranda',['a'=> User::where('roles','admin')->count()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('merek',[MasterController::class,'merek'])->name('merek');
Route::get('tambahmerek',[MasterController::class,'create_merek'])->name('create_merek');
Route::post('store_merek',[MasterController::class,'store_merek'])->name('store_merek');
Route::delete('delete_merek/{id}',[MasterController::class,'delete_merek'])->name('delete_merek');


Route::get('kategori',[MasterController::class,'kategori'])->name('kategori');
Route::get('tambahkategori',[MasterController::class,'create_kategori'])->name('create_kategori');
Route::post('store_kategori',[MasterController::class,'store_kategori'])->name('store_kategori');
Route::delete('delete_kategori/{id}',[MasterController::class,'delete_kategori'])->name('delete_kategori');

Route::get('barang',[MasterController::class,'barang'])->name('barang');
Route::get('tambahbarang',[MasterController::class,'create_barang'])->name('create_barang');
Route::post('store_barang',[MasterController::class,'store_barang'])->name('store_barang');
Route::delete('delete_barang/{id}',[MasterController::class,'delete_barang'])->name('delete_barang');

Route::get('pengguna',[MasterController::class,'pengguna'])->name('pengguna');

Route::get('barangmasuk',[TransaksiController::class,'barangmasuk'])->name('barangmasuk');
Route::get('createbarangmasuk',[TransaksiController::class,'createbarangmasuk'])->name('tambahbarangmasuk');
Route::post('storebarangmasuk',[TransaksiController::class,'store'])->name('storebarangmasuk');

Route::get('barangkeluar',[TransaksiController::class,'barangkeluar'])->name('barangkeluar');

Route::get('laporanbarangmasuk',[LaporanController::class,'barang_masuk'])->name('barang_masuk');
Route::get('laporanbarangkeluar',[LaporanController::class,'barang_keluar'])->name('barang_keluar');
Route::get('laporanstokbarang',[LaporanController::class,'stok_barang'])->name('stok_barang');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
