#!/bin/bash

# Install PHP and required extensions
apt-get update
apt-get install -y php8.2 php8.2-cli php8.2-fpm php8.2-mysql php8.2-mbstring php8.2-xml php8.2-curl php8.2-gd php8.2-zip php8.2-sqlite3

# Install Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js and npm
curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
apt-get install -y nodejs

# Install dependencies
composer install --no-dev --optimize-autoloader
npm install
npm run build

# Create SQLite database
touch database/database.sqlite

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate --force

# Start the application
php artisan serve --host 0.0.0.0 --port $PORT
