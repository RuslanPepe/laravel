<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class selectOrder extends Controller
{
  public function selectOrder(){
    $data = DB::table('order_data')->get();

    return response()->json($data);
  }
}
