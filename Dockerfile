FROM php:8.2-cli

# Installer les extensions PHP et Node.js
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev nodejs npm \
    && docker-php-ext-install pdo pdo_pgsql

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier le code
WORKDIR /app
COPY . .

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Installer les dépendances JS et compiler les assets
RUN npm install && npm run build

# Exposer le port
EXPOSE 10000

# Lancer Laravel avec migrations
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000
