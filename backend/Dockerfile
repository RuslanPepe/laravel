FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    curl \
    gnupg && \
    docker-php-ext-install pdo_mysql zip

# Создаем группу с gid 1001 (если ещё не существует) и пользователя с uid 1000 в этой группе
RUN groupadd -g 1001 appgroup || true \
    && id -u appuser || useradd -m -u 1000 -g 1001 appuser

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

COPY . .

RUN git config --global --add safe.directory /var/www

RUN mkdir -p vendor && chown -R 1000:1001 /var/www/vendor

RUN mkdir -p storage/logs bootstrap/cache \
    && chown -R 1000:1001 storage bootstrap \
    && chmod -R 775 storage bootstrap/cache

USER 1000:1001

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install

EXPOSE 9000

CMD ["php-fpm"]
