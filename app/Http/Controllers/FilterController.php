<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilterController extends Controller{
  public function filterOrder(Request $request){
    $query = Order::query();

    if ($request->location){
      $response = Http::get('https://geocode-maps.yandex.ru/v1/', [
        'apikey' => 'e7692a53-8e97-4a20-ae6f-ec1e70062c30',
        'geocode' => $request->location,
        'lang' => 'ru_RU',
        'format' => 'json',
        'results' => 1])
        ->json()['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['Point']['pos'];

      $coordinate = explode(' ', $response);
      $query->radius($coordinate[1], $coordinate[0], 3000);
    }

    $orders = $query
    ->filter($request, 'typeRoom')
    ->filter($request, 'roomCount')
    ->filterPrice($request)
    ->get();

    return response()->json($orders);
  }
}
