<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YandexSuggest
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
    $response = Http::get('https://api-maps.yandex.ru/v3/?apikey=049e4fc6-0251-4b5c-ace2-4e8d1322c64e&lang=ru_RU');

    if ($response->successful()) {
      $request->merge(['yandex_suggestions' => $response->json()]);
    }
    return $next($request);
  }

}


