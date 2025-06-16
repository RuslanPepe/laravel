<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use function Pest\Laravel\json;

class ProfileSaveController extends Controller
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

}
