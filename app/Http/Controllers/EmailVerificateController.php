<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class EmailVerificateController extends Controller{
  public function SendLink(Request $request){
    $user = User::find(Auth::id());

    $user->email = $request->email;
    $user->email_verification_token = Str::uuid();
    $user->email_verified_at = null;

    $user->save();

    Mail::to($user)->send(new EmailVerification($user));

    return response()->json();
  }
}
