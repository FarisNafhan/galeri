<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Authentikasi
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Dashboard
Route::get('/', [DashboardController::class, 'landing'])->name('landing');
Route::post('/home', [DashboardController::class, 'home'])->name('home');

