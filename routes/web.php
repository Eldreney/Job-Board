<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: [IndexController::class, 'index']);

Route::get('/about', action: [IndexController::class, 'about']);

Route::get('/contact', action: [IndexController::class, 'contact']);

Route::get('/jobs', [JobController::class, 'index']);  


