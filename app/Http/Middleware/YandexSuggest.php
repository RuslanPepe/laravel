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
    $response = Http::get('https://api-maps.yandex.ru/v3/?apikey=e7692a53-8e97-4a20-ae6f-ec1e70062c30&lang=ru_RU');

    if ($response->successful()) {
      $request->merge(['yandex_suggestions' => $response->json()]);
    }
    return $next($request);
  }

}


