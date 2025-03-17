<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhVienController;
Route::get('/', function () {
    return view('welcome');
});
Route::view('/xinchao', 'demo');
Route::get('/sinhvien', [SinhVienController::class, 'hienthithongtin']);
Route::get('/hienthi/{name}', function ($name) {
    return "Xin chào " . $name;
});
Route::get('/hienthi1/{name}',  [SinhVienController::class, 'hienthiten']);
Route::get('/hienthi3/{name}', function ($name) {
    return view ('show', ['ten'=> $name]);
});
Route::get ('/hienthi4/{name}', [SinhVienController::class, 'hienthiten1']);
Route::get('/hienthi5', [SinhVienController::class, 'hienthisinhvien']);

