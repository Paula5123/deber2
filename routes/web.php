<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Use the controller for the home page
Route::get('/', [ProductController::class, 'index']); 

// Keep your resource route
Route::resource('products', ProductController::class);