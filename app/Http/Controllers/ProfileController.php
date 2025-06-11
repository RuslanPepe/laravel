<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Inertia\Inertia;

class ProfileController extends Controller{
  public function viewProfile(){
    $profile = User::query()->where('login', Auth::id())->get();
    return Inertia::render('Profile', ['data' => $profile[0]]);
  }
}
