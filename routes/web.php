<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

Route::get('/books ', [App\Http\Controllers\BookController::class, 'index']);
require __DIR__.'/auth.php';
