# Используем образ PHP с Apache для Laravel
FROM php:8.2-apache
ENV COMPOSER_ALLOW_SUPERUSER=1

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

WORKDIR /var/www/

# Устанавливаем Node.js (для Vue.js)
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g npm@latest

# Устанавливаем Composer (для Laravel)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Копируем файлы Laravel и Vue
COPY ../ /var/www/laravel/

# Устанавливаем зависимости Laravel
WORKDIR /var/www/laravel
RUN composer install

RUN npm install --legacy-peer-deps

# Собираем фронтенд
RUN npm run build

# Устанавливаем права на файлы Laravel
#RUN #chown -R www-data:www-data /var/www/backend/storage /var/www/backend/bootstrap/cache && \
#    chmod -R 775 /var/www/backend/storage /var/www/backend/bootstrap/cache

# Указываем порты
EXPOSE 8000 3000

# Команда запуска Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
