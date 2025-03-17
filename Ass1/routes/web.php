<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinTucController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/header', function () {
    return view('header');
});