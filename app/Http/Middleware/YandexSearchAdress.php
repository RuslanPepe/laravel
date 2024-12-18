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
        'apikey' => 'b74fe2b4-c089-4991-b5c3-a1ad9c8b56af',
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


