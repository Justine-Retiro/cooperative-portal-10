<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Middleware\User;
use Illuminate\Support\Facades\Route;

// Admin Route
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'index'])->name('login.admin');
    Route::post('/login/administrator', [AdminController::class, 'login'])->name('admin.login');
    
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    });
});

// Home Route
Route::get('/', [Controller::class, 'index'])->name('home');

// Members Route
Route::prefix('member')->group(function () {
    Route::get('/login', [UserController::class, 'index'])->name('login.member');
    Route::post('/login', [UserController::class, 'login'])->name('member.login');
    
    Route::middleware('user')->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('member.dashboard');
        Route::post('/logout', [UserController::class, 'logout'])->name('member.logout');
    });
});


require __DIR__.'/auth.php';
