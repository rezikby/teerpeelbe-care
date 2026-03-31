<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\KomunitasController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Admin\TambahRumahSakitController;

// =========================
// HALAMAN UTAMA
// =========================
use App\Models\RumahSakit;

Route::get('/', function () {
    $rumahSakits = RumahSakit::latest()->get();
    return view('index', compact('rumahSakits'));
})->name('landing');

// =========================
// AUTH
// =========================
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// =========================
// HALAMAN UMUM
// =========================
Route::get('/ai-diagnosis', function () {
    return view('ai');
})->name('ai');

Route::post('/komunitas/post', [KomunitasController::class, 'store'])->name('komunitas.store');

// =========================
// HALAMAN ADMIN RUMAH SAKIT
// =========================
Route::get('/admin', [TambahRumahSakitController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/rumah-sakit', [TambahRumahSakitController::class, 'store'])->name('rumah-sakit.store');
Route::get('/rumah-sakit/{id}/edit', [TambahRumahSakitController::class, 'edit'])->name('rumah-sakit.edit');
Route::put('/rumah-sakit/{id}', [TambahRumahSakitController::class, 'update'])->name('rumah-sakit.update');
Route::delete('/rumah-sakit/{id}', [TambahRumahSakitController::class, 'destroy'])->name('rumah-sakit.destroy');

// =========================
// SETELAH LOGIN
// =========================
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return 'Selamat datang di dashboard';
    })->name('dashboard');

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/disability', function () {
        return view('disability');
    })->name('disability');

    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

    Route::prefix('admin')->group(function () {
        Route::get('/chat', [ChatController::class, 'index'])->name('admin.chat');
        Route::post('/chat/reply/{id}', [ChatController::class, 'reply'])->name('admin.chat.reply');
        Route::post('/chat-dokter', [ChatController::class, 'store'])->name('admin.chat.store');
    });
});