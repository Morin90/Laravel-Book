<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');
// require __DIR__.'/auth.php';
Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name(name: 'books.index');
Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create'])->name(name: 'books.create');
Route::post('/books/store', [App\Http\Controllers\BookController::class, 'store'])->name(name: 'books.store');
Route::get('/books/edit/{book}', [App\Http\Controllers\BookController::class, 'edit'])->name(name: 'books.edit');
Route::put('/books', [App\Http\Controllers\BookController::class, 'update'])->name(name: 'books.update');