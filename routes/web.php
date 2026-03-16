<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\KomunitasController;

// halaman utama
Route::get('/', function () {
    return view('index');
});

// AUTH
Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::post('/logout',[AuthController::class,'logout'])->name('logout');

// halaman yang butuh login
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return 'Selamat datang di dashboard';
    });

    Route::get('/home', function () {
        return view('home');
    })->name('home');

});

// fitur user
Route::post('/booking',[BookingController::class,'store']);
Route::post('/komunitas/post',[KomunitasController::class,'store']);