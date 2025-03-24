<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [TinController::class, 'index']);
Route::get('/chitiet/{id}', [TinController::class, 'chitiet'])->name('chitiet.chitiet');
Route::get('/tintrongloai/{idLT}', [TinController::class, 'tintrongloai'])->name('tintrongloai');
Route::get('/menu', [TinController::class, 'menu']);