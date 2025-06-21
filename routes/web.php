<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\MapApiController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileSaveController;
use App\Http\Controllers\ViewOrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmailVerificateController;


Route::post('/authProfileSave', [ProfileSaveController::class, 'saveProfile']);
Route::get('/map', function (Request $request) {return response()->json($request->input('yandex_suggestions'));});
Route::get('/searchMap', function (Request $request) {return response()->json($request->input('yandexSearch'));});
Route::get('/requestGeoMap', function (Request $request) {return response()->json($request->input('yandexGeoCode'));});



Route::get('/geocode', [MapApiController::class, 'geocode']);
Route::get('/geosuggest', [MapApiController::class, 'geosuggest']);

Route::post('/filterOrder', [FilterController::class, 'filterOrder']);




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
