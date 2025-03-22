<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use function Pest\Laravel\json;

class ControllerProfileSave extends Controller
{
  public function saveProfile(Request $request){
    $data = [
      'email' => $request[0]['email'] ?? null,
      'telephone' => $request[0]['telephone'] ?? null,
      'socialNetwork' => json_encode($request[2]) ?? '',
      'messangers' => json_encode($request[1]) ?? '',
      'description' => $request[0]['description'] ?? null,
      'options' => $request[0]['options'] ?? null,
      'avatar' => $request[3] ?? null,
    ];
    DB::table('userData')->where('id', session('loginId'))->update($data);
    return response()->json($data);
  }
  public function emailSave(Request $request){
    $email = $request['email'];
    $code = rand(1000, 8888);
    session(['codeEmail' => $code]);
    Mail::Raw('Ваш код - '.$code.' для подтверждения почты.', function ($message) use ($code, $email) {
      $message->to($email)->subject('Ваш код - '.$code);
    });
    return response()->json();
  }

  public function checkEmailCode(Request $request){
    if (session('codeEmail') == $request['code']){
      return response([], 200);
    }
    return response()->json([], 401);
  }
}
