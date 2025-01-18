FROM php:8.2-apache
FROM composer

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /laravel

COPY ../.. .

RUN composer i

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]


