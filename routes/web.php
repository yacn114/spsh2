<?php

use App\Http\Controllers\{CategoryController, HomeController,ProfileController,SearchController,FilterController,CommentController, ProductController,BookController, MovingController, TicketController};
use App\Http\Controllers\Auth\{AuthenticatedSessionController,RegisteredUserController};
use App\Http\Controllers\PurchasesController;
use Illuminate\Support\Facades\Route;

Route::middleware([\App\Http\Middleware\PageViewMiddleware::class])->group(function () {
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/2', [HomeController::class, 'index2'])->name('home2');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware(['guest']);
Route::get('/signup', [RegisteredUserController::class, 'create'])->name('signup')->middleware(['guest']);
Route::post('/signup', [RegisteredUserController::class, 'store'])->name('signup-store')->middleware(['guest']);
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login-store')->middleware(['guest']);
Route::get('product/{product:slug}', [ProductController::class,'show'])->name('single');
Route::post('comment/{product:id}', [CommentController::class,'store'])->name('comment_store')->middleware('auth');
Route::get('category/{category:slug}', [CategoryController::class,'index'])->name('category');
Route::get('filter/', [FilterController::class,'index'])->name('filter');
Route::get('filter/filter', [FilterController::class,'show'])->name('filter_show');
Route::get('search/', [SearchController::class,'store'])->name('search');
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('dashboard');
    Route::get('courses', [PurchasesController::class,'index'])->name("courses");
    Route::delete("logout", [ProfileController::class,'destroy'])->name('logout');
    Route::get('wallet', [MovingController::class,'index'])->name('wallet');
    Route::post('move', [MovingController::class,'store'])->name('moveStore');
    Route::get('book/{product}', [BookController::class ,'store'])->name('book');
    Route::get('ticket', [TicketController::class,'index'])->name('ticket');
    Route::get('newTicket', [TicketController::class,'create'])->name('newTick');
    Route::post('ticketStore', [TicketController::class,'store'])->name('ticketStore');
    Route::get('response/{ticket}', [TicketController::class,'show'])->name('response'); // not writed
});
Route::get('cat/{slug}', [])->name('cat'); // not writed
Route::get('complete/', [])->name('complete'); // not writed
});
