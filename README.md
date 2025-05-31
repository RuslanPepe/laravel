# Estate Trader — Биржа недвижимости

Веб-приложение для размещения, поиска и управления объявлениями о недвижимости. Разработано с использованием Laravel и Vue.js.

## 🚀 Стек технологий

- Laravel 11 (PHP 8.2)
- Vue 3 + Vite
- MySQL
- Docker + Docker Compose
- php-fpm/Nginx
- phpMyAdmin

## 🧱 Функционал

- Регистрация и авторизация пользователей
- CRUD-операции для объявлений
- Поиск и фильтрация по недвижимости
- Панель администратора
- REST API
- Веб-интерфейс на Vue 3

## 🐳 Как развернуть

```bash
git clone https://github.com/твой-ник/estate-trader.git
cd estate-trader
cp .env.example .env
docker-compose up -d --build
