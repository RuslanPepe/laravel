<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function Register(Request $request){
      if (!User::query()->where('login', $request->login)->exists()){
        $user = User::create([
          'login' => $request->login,
          'password' => $request->password,
        ]);
        Auth::login($user, true);

        return response()->json(['redirect' => url('/profile')], 201)
          ->cookie('authStatus', 'true', 60*24*31, '/', null, false, false, false, 'Lax');
      }
      else {
        return response()->json([], 409);
      }
    }

    public function Login(Request $request) {
      $credentials = $request->only('login', 'password');

      if (Auth::attempt($credentials, true)){
        return response('OK')
          ->cookie('authStatus', 'true', 60*24*31, '/', null, false, false, false, 'Lax');
      }
      return response()->json([], 403);
    }

    public function VerifyEmail(Request $request){
      $user = User::where('email_verification_token', $request->token)->first();

      if (!isset($user)){abort(403, 'Email уже подтвержден');}

      $user->email_verified_at = Carbon::now();
      $user->email_verification_token = null;
      $user->save();

      return response('Email подтвержден!');
    }
}
