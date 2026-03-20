<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\KomunitasController;
use App\Http\Controllers\ChatController;

// HALAMAN UTAMA
Route::get('/', function () {
    return view('index');
});

// AUTH
Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::post('/logout',[AuthController::class,'logout'])->name('logout');

// SETELAH LOGIN
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return 'Selamat datang di dashboard';
    });

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // DISABILITY
    Route::get('/disability', function () {
        return view('disability');
    })->name('disability');

    // BOOKING
    Route::post('/booking',[BookingController::class,'store'])->name('booking.store');

});
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/chat', [ChatController::class, 'index']);
    Route::post('/chat/reply/{id}', [ChatController::class, 'reply']);
     Route::post('/chat-dokter', [ChatController::class, 'store']);
});
// UMUM
Route::post('/komunitas/post',[KomunitasController::class,'store']);