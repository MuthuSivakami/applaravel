FROM php:8.2-apache

# System dependencies
RUN apt-get update && apt-get install -y \
    git unzip zip curl \
    libzip-dev libonig-dev libpng-dev libjpeg-dev \
    libfreetype6-dev libxml2-dev libpq-dev \
    && docker-php-ext-install \
        pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath gd \
    && a2enmod rewrite

WORKDIR /var/www/html

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy app
COPY . .

# Install deps
RUN COMPOSER_MEMORY_LIMIT=-1 composer install --no-dev --optimize-autoloader

# Apache root → public
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf

# Ensure folders exist
RUN mkdir -p storage/logs bootstrap/cache

# Copy start script
COPY start.sh /start.sh
RUN chmod +x /start.sh

# Run migrations once (safe)
RUN php artisan migrate --force || true

EXPOSE 80

CMD ["/start.sh"]
