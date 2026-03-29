<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

// Logout
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

// Dashboard (harus login)
Route::get('/dashboard', function () {
    return 'Selamat datang di dashboard';
})->middleware('auth');

Route::get('/home', function () {
    return view('home'); // ini akan memanggil resources/views/home.blade.php
})->middleware('auth')->name('home');

// Optional root
Route::get('/login', function () {
    return redirect('/login');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/ai-diagnosis', function () {
    return view('ai');
});
use App\Http\Controllers\User\BookingController;
Route::post('/booking', [BookingController::class, 'store']);


use App\Http\Controllers\User\KomunitasController;
Route::post('/komunitas/post', [KomunitasController::class, 'store']);