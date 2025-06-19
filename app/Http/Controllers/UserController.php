<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use function Pest\Laravel\json;
use function Termwind\render;

class UserController{
  public function profileView(){
    return Inertia::render('Profile', ['data' => Auth::user()]);
  }
}
