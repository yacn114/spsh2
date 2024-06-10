<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::prefix('0014')->group(function () {
    Route::get('/main', [APP\Http\Controllers\superuser\HomeController::class,'index'])->name('');
});
