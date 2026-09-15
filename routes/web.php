<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // Jangan lupa import Controller ini

// Mengarahkan ke Controller
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);