<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UploadMetaData;
use App\Http\Controllers\CreateOrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileSaveController;
use App\Http\Controllers\FilterHandlerOrderController;
use App\Http\Controllers\ViewOrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmailVerificateController;

Route::inertia('/', 'Home');
Route::get('/filter', [FilterHandlerOrderController::class, 'filterOrder']);
Route::post('/filterRequest', [FilterHandlerOrderController::class, 'filterRequest']);
Route::post('/uploadMetaData', [UploadMetaData::class, 'uploadMetaData']);
Route::post('/authProfileSave', [ProfileSaveController::class, 'saveProfile']);


Route::post('/DBcreateOrder', [CreateOrderController::class, 'writeDb']);

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
