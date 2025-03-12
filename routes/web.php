<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController; // Add this line to import the NoteController
use App\Http\Controllers\UserController;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Add this for the NoteController resource routes
Route::resource('notes', NoteController::class);

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');
