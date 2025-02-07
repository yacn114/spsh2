<?php

use App\Http\Controllers\{HomeController,ProfileController};
use App\Http\Controllers\Auth\{AuthenticatedSessionController};
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login-store');
Route::get('/dashboard', [ProfileController::class, 'edit'])->name('dashboard');
