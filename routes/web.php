<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/dashboard', [PageController::class, 'dashboard']);

Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);

Route::get('/statistik', [PageController::class, 'statistik']);

Route::get('/profile', [PageController::class, 'profile']);

Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'prosesLogin']);

Route::get('/logout', [PageController::class, 'logout']);