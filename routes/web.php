<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Mitra\MitraController;
use App\Http\Controllers\Pelanggan\HomeController;

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

Route::get('/', [AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('post.login');
Route::get('/auth/redirect', [AuthController::class,'redirectToProvider'])->name('google.redirect');
Route::get('/auth/callback', [AuthController::class,'handleProviderCallback'])->name('google.callback');
Route::get('/register-pelanggan',[AuthController::class,'pelanggan'])->name('register.pelanggan');
Route::get('/register-mitra',[AuthController::class,'mitra'])->name('register.mitra');
Route::get('/pendaftaran-selesai',[AuthController::class,'konfirmasi'])->name('konfirmasi');
Route::get('/verify/{token}',[AuthController::class,'verify'])->name('verify');
Route::get('account',[AuthController::class,'account'])->name('account');
ROute::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('pelanggan')->name('pelanggan.')->group(function(){
        Route::get('home',[HomeController::class,'index'])->name('home');
        Route::get('waiting-list',[HomeController::class,'waitingList'])->name('waiting.list');
        Route::get('history',[HomeController::class,'history'])->name('history');
        Route::get('daftar/{toko}',[HomeController::class,'daftar'])->name('daftar.toko');
        Route::get('detail/{toko}/{id}',[HomeController::class,'detailToko'])->name('detail.toko');
    });

    Route::prefix('mitra')->name('mitra.')->group(function(){
        Route::get('home',[MitraController::class,'index'])->name('home');
        Route::get('layanan', [MitraController::class,'layanan'])->name('layanan.index');
        Route::get('waiting-list',[MitraController::class,'waitingList'])->name('waiting.list');
        Route::put('update-status/{id}',[MitraController::class,'update'])->name('update.status');
        Route::get('history',[MitraController::class,'history'])->name('history');
    });
});