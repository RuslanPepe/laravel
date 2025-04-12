<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class selectOrder extends Controller
{
  public function selectOrder(Request $request){
    $data = DB::table('order_data')->offset($request->count)->limit(20)->get();
    $maxOrder = DB::table('order_data')->count();
    return response()->json(['data' => $data, 'maxOrder' => $maxOrder]);
  }
}
