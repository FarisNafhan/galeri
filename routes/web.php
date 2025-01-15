<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\DashboardController;

// Route_Kontrol
Route::get('/login', [RouteController::class, 'login'])->name('login');
Route::get('/register', [RouteController::class, 'register'])->name('register');

// Authentikasi
Route::post('/login', [AuthController::class, 'log_in'])->name('log_in');
Route::post('/register', [AuthController::class, 'register_in'])->name('register_in');

// Dashboard
Route::get('/', [DashboardController::class, 'landing'])->name('landing');
Route::post('/home', [DashboardController::class, 'home'])->name('home');

