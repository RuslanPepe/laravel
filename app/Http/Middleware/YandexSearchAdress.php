<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YandexSearchAdress
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
    // Проверка на наличие текстового запроса
    $text = $request->query('text');
    if ($text) {
      // Выполняем запрос к API Яндекса
      $response = Http::get('https://suggest-maps.yandex.ru/v1/suggest', [
        'apikey' => '94947cd1-d79e-42ae-975a-bd29e2e157c4',
        'lang' => 'ru',
        'sessiontoken' => 'true',
        'text' => $text.' ',
      ]);
      // Проверяем успешность запроса и устанавливаем данные в экземпляр запроса
      if ($response->successful()) {
        $request->merge(['yandexSearch' => $response->json()]);
      }
    }
    return $next($request);
  }
}


