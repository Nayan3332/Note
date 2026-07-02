<?php

declare(strict_types=1);

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/notes');
Route::get('/notes', [NoteController::class, 'index'])->name('note.index')->middleware('auth');
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('note.show')->middleware('auth');
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('note.edit')->middleware('auth');
Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('note.destroy')->middleware('auth');

Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
