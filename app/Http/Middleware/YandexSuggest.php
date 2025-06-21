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
    $response = Http::get('https://api-maps.yandex.ru/v3/?apikey=942c1b9b-4262-43b7-ae1b-feb56d55b469&lang=ru_RU');

    if ($response->successful()) {
      $request->merge(['yandex_suggestions' => $response->json()]);
    }
    return $next($request);
  }

}


