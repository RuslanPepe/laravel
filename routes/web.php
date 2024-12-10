<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\PostController;

Route::inertia('/', 'Home');
Route::inertia('/order-create', 'orderCreate');
Route::get('/order-id', [UserController::class, 'showVuejs']);
//Route::get('/post', [PostController::class, 'index']);
Route::inertia('/map', 'Map');



