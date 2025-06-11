<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function Laravel\Prompts\password;
use function Pest\Laravel\json;

class AuthController extends Controller
{
    public function Register(Request $request){
      if (!User::query()->where('login', $request->login)->exists()){
        $user = User::create([
          'login' => $request->login,
          'password' => $request->password,
          'email_verification_token' => Str::uuid(),
        ]);
        Auth::login($user);
        return response()->json(['redirect' => url('/profile')], 201);
      }
      else {
        return response()->json([], 409);
      }
    }

    public function Login(Request $request) {
      $credentials = $request->only('login', 'password');

      if (Auth::attempt($credentials)){
        return redirect('/profile');
      }
      return response()->json([], 403);
    }

    public function VerifyEmail(Request $request){
      $user = User::where('email_verification_token', $request->token)->first();

      if (is_null(auth()->user()->email->verified_at)){abort(403, 'Email не подтвержден');}

      $user->email_verified_at = Carbon::now();
      $user->email_verification_token = null;
      $user->save();

      return response('Email подтвержден!');
    }
}
