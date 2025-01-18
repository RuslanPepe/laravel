# Используем PHP с Apache
FROM php:8.2-apache

# Устанавливаем зависимости для PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    curl \
    gnupg && \
    docker-php-ext-install pdo_mysql zip && \
    a2enmod rewrite

# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Устанавливаем рабочую директорию
WORKDIR /

# Копируем только composer.json и composer.lock для предварительной установки зависимостей
COPY ../.. ./

# Устанавливаем переменную для разрешения работы Composer под суперпользователем
ENV COMPOSER_ALLOW_SUPERUSER=1

# Устанавливаем PHP-зависимости
RUN composer install

# Настраиваем права доступа для Laravel
RUN chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

# Указываем порт для Laravel
EXPOSE 8000

# Команда запуска
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
