<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailVerificateController extends Controller{
  public function SendLink(Request $request){
    $user = User::find(Auth::id());
    $user->email = $request->email;
    $user->save();
    $mail = Mail::to($user)->send(new EmailVerification($user));
    return response()->json($user);
  }
}
