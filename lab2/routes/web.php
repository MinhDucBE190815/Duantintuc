<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\TintucController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hienthi',[SinhVienController::class, 'index']);
Route::get('/count',[SinhVienController::class, 'count']);
Route::get('/tintuc',[TintucController::class, 'hienthitintuc']);