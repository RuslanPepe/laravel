<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\password;
use function Pest\Laravel\json;

class AuthController extends Controller
{
    public function Register(Request $request){
      if (!User::query()->where('login', $request->login)->exists()){
        $user = User::create([
          'login' => $request->login,
          'password' => $request->password,
        ]);
        Auth::login($user);
        return redirect('/profile');
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
}
