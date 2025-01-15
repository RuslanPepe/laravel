<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UploadPhoto;


Route::inertia('/', 'Home');
Route::inertia('/order-create', 'orderCreate');
Route::get('/order-id', [UserController::class, 'showVuejs']);
Route::get('/post', [PostController::class, 'index']);
Route::inertia('/map', 'Map');
Route::get('/map', function (Request $request) {return response()->json($request->input('yandex_suggestions'));});
Route::get('/searchMap', function (Request $request) {return response()->json($request->input('yandexSearch'));});
Route::get('/requestGeoMap', function (Request $request) {return response()->json($request->input('yandexGeoCode'));});
Route::post('/uploadPhoto', [UploadPhoto::class, 'uploadPhoto']);
Route::get('/test.js', [OrderController::class, 'OrderCreate']);
