<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterHandlerOrderController extends Controller
{
  public function filterOrder(Request $request){
    $typeOrder = explode(',', $request->input('typeOrder')) ?? null;
    $countRooms = explode(',', $request->input('countRooms')) ?? null;
    $price = explode(',', $request->input('price')) ?? null;
//    $geoPos = $request->input('geoPosition') ?? null;
    $query = Order::all();

    if ($price == null){
      $query->whereBetween('price', [$price[0], $price[1]]);
    }
    if ($countRooms == null){
      $query->whereIn('roomCount', $countRooms);
    }
    if ($typeOrder == null){
      $query->whereIn('typeRoom', $typeOrder);
    }


    return inertia('Filter', ['data' => $query]);
  }

  public function filterRequest(Request $request){
    $typeOrder = $request->input('typeOrder') ?? null;
    $countRooms = explode(',', $request->input('countRoom')) ?? null;
    $priceMin = preg_replace('/\s+/', '', $request->input('inputPriceMin')) ?? null;
    $priceMax = preg_replace('/\s+/', '', $request->input('inputPriceMax')) ?? null;
    $query = DB::table('order_data');

    if ($priceMin || $priceMax){
      $query->whereBetween('price', [$priceMin, $priceMax]);
    }
    if ($countRooms !== ['']){
      $query->whereIn('roomCount', $countRooms);
    }
    if ($typeOrder){
      $query->whereIn('typeRoom', $typeOrder);
    }

    $data = $query->get();
    return response()->json($data);
  }
}
