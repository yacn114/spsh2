<?php

use App\Http\Controllers\{HomeController,ProfileController,SearchController};
use App\Http\Controllers\Auth\{AuthenticatedSessionController,RegisteredUserController};
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/2', [HomeController::class, 'index2'])->name('home2');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware(['guest']);
Route::get('/signup', [RegisteredUserController::class, 'create'])->name('signup')->middleware(['guest']);
Route::post('/signup', [RegisteredUserController::class, 'store'])->name('signup-store')->middleware(['guest']);
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login-store')->middleware(['guest']);
Route::get('/dashboard', [ProfileController::class, 'edit'])->name('dashboard')->middleware(['auth']);
Route::post('search/', [SearchController::class,'store'])->name('search');
Route::get('product/{slug}', [])->name('single'); // not writed
Route::get('category/{slug}', [])->name('category'); // not writed
