<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use function Pest\Laravel\json;
use function Termwind\render;

class UserController
{
  public function showVuejs($id){
    $data = DB::table('order_data')->where('orderId', $id)->get();

    return Inertia::render('Order-id', ['data' => $data[0]]);
  }

  public function profileView(){
    $data = DB::table('userData')->where('id', session('loginId'))->select('id', 'login', 'avatar', 'email', 'telephone', 'socialNetwork', 'messangers', 'description', 'options', 'myOrder', 'reviews')->get();

    return Inertia::render('Profile', ['data' => $data[0]]);
  }

}
