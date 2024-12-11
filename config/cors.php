<?php

return [

  'paths' => ['api/*', 'sanctum/csrf-cookie'], // Настройка путей для CORS

  'allowed_methods' => ['*'], // Разрешенные HTTP-методы

  'allowed_origins' => ['*'], // Разрешенные источники (по умолчанию разрешено для всех)

  'allowed_origins_patterns' => [],

  'allowed_headers' => ['*'], // Разрешенные заголовки (по умолчанию разрешено для всех)

  'exposed_headers' => [],

  'max_age' => 0,

  'supports_credentials' => false,

];


