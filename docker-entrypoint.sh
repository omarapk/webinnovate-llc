#!/bin/bash

# Enable error reporting for debugging
set -e

echo "Starting Laravel application setup..."

# Check if .env file exists
if [ ! -f .env ]; then
    echo "Creating .env file..."
    echo "APP_NAME=HiStudy" > .env
    echo "APP_ENV=production" >> .env
    echo "APP_DEBUG=true" >> .env
    echo "LOG_CHANNEL=stack" >> .env
    echo "DB_CONNECTION=sqlite" >> .env
    echo "DB_DATABASE=database/database.sqlite" >> .env
    echo "CACHE_DRIVER=file" >> .env
    echo "SESSION_DRIVER=file" >> .env
    echo "SESSION_LIFETIME=120" >> .env
    echo "QUEUE_CONNECTION=sync" >> .env
fi

# Update .env file with environment variables if they exist
if [ ! -z "$APP_URL" ]; then
    echo "Setting APP_URL to: $APP_URL"
    sed -i "s|APP_URL=.*|APP_URL=$APP_URL|g" .env
fi

if [ ! -z "$APP_KEY" ]; then
    echo "Setting APP_KEY from environment variable"
    sed -i "s|APP_KEY=.*|APP_KEY=$APP_KEY|g" .env
fi

if [ ! -z "$DB_CONNECTION" ]; then
    sed -i "s|DB_CONNECTION=.*|DB_CONNECTION=$DB_CONNECTION|g" .env
fi

if [ ! -z "$CACHE_DRIVER" ]; then
    sed -i "s|CACHE_DRIVER=.*|CACHE_DRIVER=$CACHE_DRIVER|g" .env
fi

if [ ! -z "$SESSION_DRIVER" ]; then
    sed -i "s|SESSION_DRIVER=.*|SESSION_DRIVER=$SESSION_DRIVER|g" .env
fi

# Create storage directories if they don't exist
echo "Creating storage directories..."
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs

# Set proper permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Generate key if not set
if ! grep -q "APP_KEY=base64:" .env; then
    echo "Generating application key..."
    php artisan key:generate
fi

# Clear caches
echo "Clearing caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Show current .env configuration (without sensitive data)
echo "Current configuration:"
grep -E "^(APP_NAME|APP_ENV|APP_DEBUG|APP_URL|DB_CONNECTION)" .env

echo "Starting Laravel server..."
exec php artisan serve --host 0.0.0.0 --port 8000
