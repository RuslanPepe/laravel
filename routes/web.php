<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\UploadMetaData;
use App\Http\Controllers\CreateOrderController;
use App\Http\Controllers\selectOrder;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileSaveController;
use App\Http\Controllers\FilterHandlerOrderController;
use App\Http\Controllers\ViewOrderController;
use App\Http\Controllers\ProfileController;
use App\Jobs\SendWelcomeMessage;
use App\Http\Controllers\EmailVerificateController;

Route::inertia('/', 'Home');
Route::get('/filter', [FilterHandlerOrderController::class, 'filterOrder']);
Route::post('/filterRequest', [FilterHandlerOrderController::class, 'filterRequest']);
Route::get('/order-{id}', [ViewOrderController::class, 'ViewOrder']);
Route::post('/uploadMetaData', [UploadMetaData::class, 'uploadMetaData']);
Route::post('/DBcreateOrder', [CreateOrderController::class, 'writeDb']);
Route::post('/selectDateDB', [selectOrder::class, 'selectOrder']);
Route::post('/authProfileSave', [ProfileSaveController::class, 'saveProfile']);
Route::post('/authEmailSave', [ProfileSaveController::class, 'emailSave']);


Route::post('/authReg', [AuthController::class, 'Register']);
Route::post('/authLogin', [AuthController::class, 'Login']);
Route::get('/verify/{token}', [AuthController::class, 'VerifyEmail']);
Route::post('/EmailSendLinkActivate', [EmailVerificateController::class, 'SendLink']);


Route::middleware(['auth'])->group(function (){
  Route::get('/profile', [ProfileController::class, "ViewProfile"]);
  Route::inertia('/order-create', 'orderCreate');

});


//Route::inertia('/test', 'Test');
//Route::get('/post', [PostController::class, 'index']);
//Route::inertia('/map', 'Map');
//Route::get('/map', function (Request $request) {return response()->json($request->input('yandex_suggestions'));});
//Route::get('/searchMap', function (Request $request) {return response()->json($request->input('yandexSearch'));});
//Route::get('/requestGeoMap', function (Request $request) {return response()->json($request->input('yandexGeoCode'));});
