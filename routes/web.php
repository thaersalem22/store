<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('layouts.admin');
});
Route::middleware(['auth'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::resource('/products', ProductController::class);
        Route::resource('/categories', CategoryController::class);
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
