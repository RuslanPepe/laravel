<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\handlerGetRequest;

Route::inertia('/', 'Home');
Route::inertia('/order-create', 'orderCreate');
//Route::inertia('/order-id', 'Order-id');
Route::get('/order-id', [UserController::class, 'showVuejs']);
Route::get('/post', [PostController::class, 'index']);


