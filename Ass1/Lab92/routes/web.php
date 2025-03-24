<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinTucController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hienthi',[TinTucController::class, 'hienthitintuc']);
Route::get('/tinmoi', [TinTucController::class, 'tintucmoi']);
Route::get('/tintuc{id}', [TinTucController::class, 'tintucid']);
Route::get('/chitiet{id}', [TinTucController::class, 'tinid'])->name('chitiet.tinid');