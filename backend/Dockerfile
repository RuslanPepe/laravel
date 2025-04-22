FROM php:8.2-fpm

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    curl \
    gnupg && \
    docker-php-ext-install pdo_mysql zip

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Установка рабочей директории
WORKDIR /var/www

# Копирование файлов проекта
COPY . .

# Установка зависимостей через Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install

# Expose порта 8000 для PHP-FPM
EXPOSE 9000

# Запуск PHP-FPM
CMD ["php-fpm"]
