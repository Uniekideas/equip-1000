<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/equip1000/register', [RegisterController::class,'index'])->name('register');
Route::get('equip1000/home-login', [LoginController::class,'index'])->name('login');
Route::get('/lms', function(){
    return view('lms');
});