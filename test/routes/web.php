<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/users', [AdminController::class, 'index']);
    });

    // User routes
    Route::get('/user/courses', [UserController::class, 'index']);
});

require __DIR__.'/auth.php';
