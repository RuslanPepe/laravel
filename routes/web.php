<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Middleware\YandexSuggest;


Route::inertia('/', 'Home');

Route::inertia('/order-create', 'orderCreate');
Route::get('/order-id', [UserController::class, 'showVuejs']);
Route::get('/post', [PostController::class, 'index']);
Route::inertia('/map', 'Map');
Route::get('/suggest', function (Request $request) {
  return response()->json($request->input('yandex_suggestions'));
});


