<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class FilterController extends Controller{
  public function filterOrder(Request $request){
    $query = Order::query();

    $orders = $query->filter($request, 'typeRoom');
    $orders = $query->filter($request, 'roomCount');
    
    $orders = $orders->get();
    return response()->json($orders);
  }
}
