#!/bin/bash
# Устанавливаем зависимости, если они не установлены
if [ ! -d "node_modules" ]; then
  npm install
fi

# Запуск разработки
npm run dev -- --host=0.0.0.0 --port=5170
