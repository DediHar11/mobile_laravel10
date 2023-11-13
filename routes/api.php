<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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