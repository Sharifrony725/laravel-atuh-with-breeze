<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Teacher\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/teachers', [TeacherController::class, 'view']);
