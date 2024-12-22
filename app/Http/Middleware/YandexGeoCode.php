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

    $response = Http::get('https://geocode-maps.yandex.ru/1.x/', [
      'apikey' => 'e7692a53-8e97-4a20-ae6f-ec1e70062c30',
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
