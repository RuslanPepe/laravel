#!/bin/bash
# Устанавливаем зависимости, если они не установлены
if [ ! -d "vendor" ]; then
  composer install
fi

# Запуск Laravel сервера
php artisan serve --host=0.0.0.0 --port=8000
