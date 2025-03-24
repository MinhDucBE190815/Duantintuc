<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinTucController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/home', [TinTucController::class, 'index']);
Route::get('/chitiet/{id}', [TinTucController::class, 'chitiet'])->name('chitiet.chitiet');
Route::get('/tintrongloai/{idLT}', [TinTucController::class, 'tintrongloai'])->name('tintrongloai');
Route::get('/menu', [TinTucController::class, 'menu']);
Route::get('/footer',[TinTucController::class, 'footer']);
Route::get('/luotxem/{id}', [TinTucController::class, 'tangLuotXem']);
Route::get('/topbaiviet', [TinTucController::class, 'topBaiViet'])->name('topbaiviet');
Route::get('/baivietmoi',[TinTucController::class, 'baivietmoi'])->name('baivietmoi.baivietmoi');
Route::get('/admin', [TinTucController::class, 'admin'])->name('admin');
Route::resource('tin', TinTucController::class);
Route::get('/quanly', [TinTucController::class, 'quanly'])->name('quanly');
Route::get('/themtin',[TinTucController::class, 'create']);
Route::get('/suatin',[TinTucController::class, 'edit']);
Route::get('/dashboard',[TinTucController::class, 'dashboard'])->name('dashboard');