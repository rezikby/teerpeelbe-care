<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Halaman Register
Route::get('/register', [AuthController::class,'showRegister'])->name('register');
Route::post('/register', [AuthController::class,'register']);

// Halaman Login
Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login']);

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
Route::get('/', function () {
    return redirect('/login');
});

