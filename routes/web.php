<?php

use App\Http\Controllers\{CategoryController, HomeController,ProfileController,SearchController,FilterController,singleController,CommentController};
use App\Http\Controllers\Auth\{AuthenticatedSessionController,RegisteredUserController};
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/2', [HomeController::class, 'index2'])->name('home2');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware(['guest']);
Route::get('/signup', [RegisteredUserController::class, 'create'])->name('signup')->middleware(['guest']);
Route::post('/signup', [RegisteredUserController::class, 'store'])->name('signup-store')->middleware(['guest']);
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login-store')->middleware(['guest']);
Route::post('search/', [SearchController::class,'store'])->name('search');
Route::get('product/{product:slug}', [singleController::class,'index'])->name('single');
Route::post('comment/{product:id}', [CommentController::class,'store'])->name('comment_store')->middleware('auth');
Route::get('search/', function(){
    return redirect(route('home2'));
});

Route::get('/dashboard', [ProfileController::class, 'edit'])->name('dashboard')->middleware(['auth']); // not writed
Route::get('filter/', [FilterController::class,'index'])->name('filter'); // not writed
Route::get('cat/{slug}', [])->name('cat'); // not writed
Route::get('book/{slug}', [])->name('book'); // not writed
Route::get('category/{category:slug}', [CategoryController::class,'index'])->name('category'); // not writed
