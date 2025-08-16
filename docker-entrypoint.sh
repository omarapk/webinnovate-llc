#!/bin/bash

# Update .env file with environment variables if they exist
if [ ! -z "$APP_URL" ]; then
    sed -i "s|APP_URL=.*|APP_URL=$APP_URL|g" .env
fi

if [ ! -z "$APP_KEY" ]; then
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

# Generate key if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate
fi

# Run migrations
php artisan migrate --force

# Start the application
exec php artisan serve --host 0.0.0.0 --port 8000
