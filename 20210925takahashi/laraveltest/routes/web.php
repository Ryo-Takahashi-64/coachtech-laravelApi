<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BuildController;
use App\Http\Controllers\ContactController;


// Route::get('/building/{room?}', [BuildController::class, 'index']);
Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'thanks']);