<?php

use App\Http\Controllers\QuoteController;

Route::middleware('auth')->get('/quotes', [QuoteController::class, 'index']);

