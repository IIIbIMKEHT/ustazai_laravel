# Dockerfile
FROM php:8.2-fpm

# Установка необходимых расширений и зависимостей
RUN docker-php-ext-install pdo pdo_mysql

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копирование исходного кода
COPY . /var/www/html

WORKDIR /var/www/html

# Установка зависимостей Laravel
RUN composer install

# Установка прав
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
