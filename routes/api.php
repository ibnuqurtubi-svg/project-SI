<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;

Route::get('/add', [MathController::class, 'add']);
