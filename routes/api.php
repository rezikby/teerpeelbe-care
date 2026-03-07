<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\TambahRumahSakitController;

// auth
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});


// admin
Route::middleware('auth:sanctum')->prefix('admin')->group(function () {

    // nampilin data rumah sakit
    Route::get('/rumah-sakit', [TambahRumahSakitController::class, 'index']);

    // buat data
    Route::post('/tambah/rumah-sakit', [TambahRumahSakitController::class, 'store']);

    // get by id
    Route::get('/rumah-sakit/{id}', [TambahRumahSakitController::class, 'show']);

    // update
    Route::put('/rumah-sakit/{id}', [TambahRumahSakitController::class, 'update']);

    // apus
    Route::delete('/rumah-sakit/{id}', [TambahRumahSakitController::class, 'destroy']);

});