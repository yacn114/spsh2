<?php

use App\Http\Controllers\{CategoryController, HomeController,ProfileController,SearchController,FilterController,CommentController, ProductController,BookController, MovingController, TicketController,PurchasesController, RoleController};
use App\Http\Controllers\Auth\{AuthenticatedSessionController, PasswordResetLinkController, RegisteredUserController};
use App\Http\Controllers\SiteDataController;
use App\Http\Middleware\AuthUserMiddleware;
use App\Http\Middleware\PermissionControlMidlleware;
use App\Models\Product;
use App\Models\SiteData;
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
    Route::prefix('')->middleware(PermissionControlMidlleware::class.":update-user")->group(function () {
    Route::get('addBalance', [ProfileController::class,"addBalance"])->name("addBalance");
    Route::patch('Add-Balance', [ProfileController::class,'editBalance'])->name('edit-balance');
    Route::get('responseAdmin', [ProfileController::class,'AdminTicket'])->name('AdminTicket');
    Route::get('responseAdmin2/{ticket}', [ProfileController::class,'responseAdmin2'])->name('responseAdmin2');
    Route::patch('StoreResponse', [ProfileController::class,'StoreResponse'])->name('StoreResponse');
    });
    // crud
    Route::prefix('')->middleware(PermissionControlMidlleware::class .':read-user')->group(function () {
        Route::get('/user', [ProfileController::class,'estelam'])->name('show-balance');
    });
    Route::prefix('')->middleware(PermissionControlMidlleware::class .':create-category')->group(function () {
    Route::get('crud/Category', [CategoryController::class,'create'])->name('CategoryCrudCreate');
    Route::post('crud/CategoryStore', [CategoryController::class,'store'])->name('CategoryCrudStore');
    });
    Route::prefix('')->middleware(PermissionControlMidlleware::class .':update-category')->group(function () {
        Route::get('list-category', [CategoryController::class,'show'])->name('list-category');
    });
    Route::get('listProduct', [ProductController::class,"index"])->name("listProduct")->middleware(PermissionControlMidlleware::class .':create-product');
    Route::get('/inactiveProduct/{product}', [ProductController::class,"statusInactive"])->name("inactiveProduct")->middleware(PermissionControlMidlleware::class .':update-product');
    Route::get('/activeProduct/{product}', [ProductController::class,"statusActive"])->name("activeProduct")->middleware(PermissionControlMidlleware::class .':update-product');
    Route::get('/editProduct/{product}', [ProductController::class,"edit"])->name("editProduct")->middleware(PermissionControlMidlleware::class .':update-product');
    Route::delete('delete/Product/{product}', [ProductController::class,"destroy"])->name("deleteProduct")->middleware(PermissionControlMidlleware::class .':delete-product');
    Route::patch('update-category/{category}', [CategoryController::class,'update'])->name('update-category')->middleware(PermissionControlMidlleware::class.":update-category");
    Route::patch('update-product/{product}', [ProductController::class,'update'])->name('update-Product')->middleware(PermissionControlMidlleware::class.":update-product");
    Route::delete('/delete/category/{category}', [CategoryController::class,'destroy'])->name('destroycategory')->middleware(PermissionControlMidlleware::class.":delete-category");
    Route::get('edit/{category}', [CategoryController::class,'edit'])->name('editCategory')->middleware(PermissionControlMidlleware::class.":update-category");
 
 
    Route::prefix('')->middleware(PermissionControlMidlleware::class .':create-product')->group(function () {
    Route::get('createProduct', [ProductController::class,'create'])->name('createProduct');
    Route::post('storeProduct', [ProductController::class,'store'])->name('storeProduct');
    });
    Route::prefix('')->middleware(PermissionControlMidlleware::class .':create-siteData')->group(function () {
    Route::get('createData', [SiteDataController::class,'create'])->name('createData');
    Route::post('storeData', [SiteDataController::class,'store'])->name('storeData');
    });
    
    Route::get('createRole', [RoleController::class,'create'])->name('createRole')->middleware(PermissionControlMidlleware::class.':create-role');
    Route::get('listRole', [RoleController::class,'index'])->name('listRole')->middleware(PermissionControlMidlleware::class.':read-role');
    Route::post('storeRole', [RoleController::class,'store'])->name('storeRole')->middleware(PermissionControlMidlleware::class.':create-role');
    Route::get('editrole/{role}', [RoleController::class,'edit'])->name('editrole')->middleware(PermissionControlMidlleware::class.':update-role');
    Route::patch('updaterole/{role}', [RoleController::class,'update'])->name('updaterole')->middleware(PermissionControlMidlleware::class.':update-role');
    Route::delete('deleterole/{role}', [RoleController::class,'destroy'])->name('deleterole')->middleware(PermissionControlMidlleware::class.':delete-role');
    
    // end crud
    Route::patch('Password-Reset', [PasswordResetLinkController::class,'store'])->name('Password-Reset'); // not writed

});
Route::get('cat/{slug}', [])->name('cat'); // not writed
Route::get('complete/', [])->name('complete'); // not writed
});
