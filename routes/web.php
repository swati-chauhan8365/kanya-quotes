<?php

use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/quotes', [QuoteController::class, 'show'])->name('quotes');
