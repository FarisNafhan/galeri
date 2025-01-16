<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddPhotoController;
use App\Http\Controllers\AddAlbumController;

// Route untuk halaman umum (tanpa autentikasi)
Route::get('/', [RouteController::class, 'landing'])->name('landing');
Route::prefix('auth')->group(function () {
    Route::get('/login', [RouteController::class, 'login'])->name('login');
    Route::post('/log_in', [AuthController::class, 'log_in'])->name('log_in');
    Route::get('/register', [RouteController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'register_in'])->name('register_in');
});

// Route yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/MyGalery', [RouteController::class, 'MyGalery'])->name('MyGalery');
    Route::get('/album', [RouteController::class, 'addAlbum'])->name('addAlbum');

    // Menambahkan data (My_Galery & album)
    Route::post('/addImage', [AddPhotoController::class, 'addImage'])->name('addImage');
    Route::post('/album', [AddAlbumController::class, 'album'])->name('album');
});
