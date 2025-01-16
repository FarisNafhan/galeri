<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\MyGaleryController;
use App\Http\Controllers\AddPhotoController;
use App\Http\Controllers\AddAlbumController;

// tampilan umum
Route::get('/', [RouteController::class, 'landing'])->name('landing');
Route::get('/login', [RouteController::class, 'login'])->name('login');
Route::get('/register', [RouteController::class, 'register'])->name('register');

// Authentikasi
Route::post('/login', [AuthController::class, 'log_in'])->name('log_in');
Route::post('/register', [AuthController::class, 'register_in'])->name('register_in');

Route::middleware(['auth'])->group(function () {
    // Route_Kontrol
    Route::get('/home', [RouteController::class, 'home'])->name('home');
    Route::get('/MyGalery', [RouteController::class, 'MyGalery'])->name('MyGalery');
    Route::get('/album', [RouteController::class, 'addAlbum'])->name('addAlbum');
    // Dashboard
    Route::post('/home', [DashboardController::class, 'home'])->name('home');

    // My_Galery & album
    Route::post('/addImage', [AddPhotoController::class, 'addImage'])->name('addImage');
    Route::post('/album', [AddAlbumController::class, 'album'])->name('album');
});
