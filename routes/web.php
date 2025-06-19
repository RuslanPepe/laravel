<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileSaveController;
use App\Http\Controllers\FilterHandlerOrderController;
use App\Http\Controllers\ViewOrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmailVerificateController;

Route::get('/filter', [FilterHandlerOrderController::class, 'filterOrder']);
Route::post('/filterRequest', [FilterHandlerOrderController::class, 'filterRequest']);
Route::post('/authProfileSave', [ProfileSaveController::class, 'saveProfile']);


Route::inertia('/', 'Home');
Route::post('/authReg', [AuthController::class, 'Register']);
Route::post('/authLogin', [AuthController::class, 'Login']);
Route::get('/order-{id}', [ViewOrderController::class, 'Order']);
Route::post('/saveFile', [FileController::class, 'Save']);
Route::post('/createOrder', [OrderController::class, 'CreateOrder']);


Route::middleware(['auth'])->group(function (){
  Route::inertia('/orderNew', 'orderCreate');
  Route::get('/profile', [ProfileController::class, "ViewProfile"]);
  Route::get('/verify/{token}', [AuthController::class, 'VerifyEmail']);
  Route::post('/EmailSendLinkActivate', [EmailVerificateController::class, 'SendLink']);


});
