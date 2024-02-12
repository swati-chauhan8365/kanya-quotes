<?php

use App\Http\Controllers\QuoteController;

Route::get('/', [QuoteController::class, 'show']);