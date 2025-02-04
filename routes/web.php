<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController; // Add this line to import the NoteController

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Add this for the NoteController resource routes
Route::resource('notes', NoteController::class);