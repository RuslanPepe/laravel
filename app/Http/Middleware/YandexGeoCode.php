<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YandexGeoCode
{
  /**
   * Handle an incoming request.
   *
   * @param  Request  $request
   * @param  Closure  $next
   * @return mixed
   */
  public function handle(Request $request, Closure $next)
  {
    $text = $request->query('text');

    $response = Http::get('https://geocode-maps.yandex.ru/v1/', [
      'apikey' => '942c1b9b-4262-43b7-ae1b-feb56d55b469',
      'geocode' => $text,
      'format' => 'json',
      'results' => '1',
  ]);

    if ($response->successful()) {
      $request->merge(['yandexGeoCode' => $response->json()]);
    }
    return $next($request);
  }
}
