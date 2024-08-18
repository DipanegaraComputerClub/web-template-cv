<?php

use App\Http\Controllers\cvcontroller;
use App\Http\Controllers\deskripsicontroller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[cvcontroller::class, 'index'])->name('utama');
Route::get('/buatcv',[cvcontroller::class, 'buatcv'])->name('buatcv');
Route::get('/tentang',[cvcontroller::class, 'about'])->name('tentang');
Route::get('/inputcv1',[cvcontroller::class, 'inputcvsatu'])->name('input1');
// Route::get('/inputcv2',[cvcontroller::class, 'inputcvdua'])->name('input2');
// Route::get('/inputcv3',[cvcontroller::class, 'inputcvtiga'])->name('input3');
Route::post('/cv/store', [deskripsicontroller::class, 'store']);
// Route::post('/cv/store2', [deskripsicontroller::class, 'store2']);
// Route::post('/cv/store3', [deskripsicontroller::class, 'store3']);
Route::get('/template1',[cvcontroller::class, 'tampilancv1'])->name('tp1');
Route::get('/template2',[cvcontroller::class, 'tampilancv2'])->name('tp2');
Route::get('/template3',[cvcontroller::class, 'tampilancv3'])->name('tp3');
Route::post('/cetak',[cvcontroller::class, 'cetak'])->name('cetak');
Route::post('/cetak2',[cvcontroller::class, 'cetak2'])->name('cetak2');
Route::post('/cetak3',[cvcontroller::class, 'cetak3'])->name('cetak3');
Route::get('/lp1',[cvcontroller::class, 'lp1'])->name('lp1');
Route::get('/lp2',[cvcontroller::class, 'lp2'])->name('lp2');
Route::get('/lp3',[cvcontroller::class, 'lp3'])->name('lp3');
Route::get('/lp4',[cvcontroller::class, 'lp4'])->name('lp4');
Route::get('/dashboard',[cvcontroller::class, 'admin'])->name('admin');
Route::get('/login',[cvcontroller::class, 'login'])->name('login');
Route::post('/login',[cvcontroller::class, 'masuk']);
Route::post('/logout', [cvcontroller::class, 'logout'])->name('logout');
Route::get('/register', [cvcontroller::class, 'formregister'])->name('formregister');
Route::post('/register', [cvcontroller::class, 'register'])->name('register');

Route::middleware(['adminlogin'])->group(function(){
    Route::get('/dashboard',[cvcontroller::class, 'admin'])->name('admin');
    Route::get('/ltemplate',[cvcontroller::class, 'lt'])->name('lt');
    Route::get('/ltemplate2',[cvcontroller::class, 'lt2'])->name('lt2');
    Route::get('/ltemplate3',[cvcontroller::class, 'lt3'])->name('lt3');
    Route::get('/lcetak',[cvcontroller::class, 'lt4'])->name('lcetak');
});

