<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapApiController extends Controller{
  public function geocode(Request $request){
    $response = Http::get('https://geocode-maps.yandex.ru/v1/', [
      'apikey' => '942c1b9b-4262-43b7-ae1b-feb56d55b469',
      'geocode' => $request->text,
      'format' => 'json',
      'results' => '1',
    ]);
    return response()->json($response->json());
  }

  public function geosuggest(Request $request){
    $response = Http::get('https://suggest-maps.yandex.ru/v1/suggest', [
      'apikey' => 'b74fe2b4-c089-4991-b5c3-a1ad9c8b56af',
      'lang' => 'ru',
      'sessiontoken' => 'true',
      'text' => $request->text.' ',
    ]);
    return response()->json($response->json());
  }
}
