<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\password;
use function Pest\Laravel\json;

class ControllerAuth extends Controller
{
    public function authReg(Request $data){
      $dataAll = DB::table('userData')->get('login');
      for ($i = 0; $i < count($dataAll); $i++) {
        if ($dataAll[$i]->login === $data['login']){
          return response()->json('Login exists', 401);
        }
      }
      DB::table('userData')->insert(['login' => $data['login'], 'password' => password_hash($data['pass1'], PASSWORD_DEFAULT)]);
      $req = DB::table("userData")->where("login", $data['login'])->first();
      session(['loginId' => $req->id]);
      return response()->json([['id' => $req->id], 'succesfull!']);
    }

    public function authLogin(Request $data) {
      $dataAll = DB::table('userData')->get();
      for ($i = 0; $i < count($dataAll); $i++) {
        if ($data['login'] == $dataAll[$i]->login){
          if (password_verify($data['pass1'], $dataAll[$i]->password)){
            session(['loginId' => $dataAll[$i]->id]);
            return response()->json([['id' => $dataAll[$i]->id], 'succesfull']);
          }
          else {
            return response()->json('incorrect data', 401);
          }
        }
      }
    }
}
