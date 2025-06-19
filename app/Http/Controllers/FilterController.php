<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class FilterController extends Controller{
  public function filterOrder(Request $request){
    $query = Order::query();

    $orders = $query
    ->filter($request, 'typeRoom')
    ->filter($request, 'roomCount')
    ->filterPrice($request)
    ->get();

    return response()->json($orders);
  }
}
