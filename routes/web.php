<?php

use App\Http\Controllers\{CategoryController, HomeController,ProfileController,SearchController,FilterController,CommentController, ProductController,BookController, MovingController, TicketController,EmailController,PurchasesController};
use App\Http\Controllers\crud\CategoryController as CategoryCrud;
use App\Http\Controllers\Auth\{AuthenticatedSessionController, PasswordResetLinkController, RegisteredUserController};
use App\Http\Middleware\AuthUserMiddleware;
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
Route::prefix('dashboard')->middleware(['auth',AuthUserMiddleware::class])->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('dashboard');
    Route::get('courses', [PurchasesController::class,'index'])->name("courses");
    Route::delete("logout", [ProfileController::class,'destroy'])->name('logout');
    Route::get('wallet', [MovingController::class,'index'])->name('wallet');
    Route::post('move', [MovingController::class,'store'])->name('moveStore');
    Route::get('book/{product}', [BookController::class ,'store'])->name('book');
    Route::get('ticket', [TicketController::class,'index'])->name('ticket');
    Route::get('newTicket', [TicketController::class,'create'])->name('newTick');
    Route::post('ticketStore', [TicketController::class,'store'])->name('ticketStore');
    Route::get('response/{ticket}', [TicketController::class,'show'])->name('response');
    Route::get('Reset-password', [PasswordResetLinkController::class,'create'])->name('Reset-password');
    Route::get('history', [ProfileController::class,'history'])->name('history');
    Route::get('addBalance', [ProfileController::class,"addBalance"])->name("addBalance");
    Route::patch('Add-Balance', [ProfileController::class,'editBalance'])->name('edit-balance');
    Route::get('responseAdmin', [ProfileController::class,'AdminTicket'])->name('AdminTicket');
    Route::get('responseAdmin2/{ticket}', [ProfileController::class,'responseAdmin2'])->name('responseAdmin2');
    Route::patch('StoreResponse', [ProfileController::class,'StoreResponse'])->name('StoreResponse');
    // crud
    Route::get('crud/Category', [CategoryCrud::class,'create'])->name('CategoryCrudCreate');
    Route::post('crud/CategoryStore', [CategoryCrud::class,'store'])->name('CategoryCrudStore');
    
    // end crud
    Route::patch('Password-Reset', [PasswordResetLinkController::class,'store'])->name('Password-Reset'); // not writed

});
Route::get('cat/{slug}', [])->name('cat'); // not writed
Route::get('complete/', [])->name('complete'); // not writed
});
