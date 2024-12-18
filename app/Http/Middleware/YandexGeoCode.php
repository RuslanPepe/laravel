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
      'apikey' => '049e4fc6-0251-4b5c-ace2-4e8d1322c64e',
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
