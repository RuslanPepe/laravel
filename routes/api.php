<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderApiController;

Route::apiResource('orders', OrderApiController::class);
