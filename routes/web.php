<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/signup', [AuthController::class, 'signupPost'])->name('signup');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'loginPost'])->name('login');

Route::get('/home', [HomeController::class, 'index']);
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


