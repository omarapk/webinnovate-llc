#!/bin/bash

set -e

echo "Starting Laravel application setup..."

# Create .env file with all required variables
echo "Creating .env file..."
cat > .env << EOF
APP_NAME=HiStudy
APP_ENV=production
APP_DEBUG=true
APP_KEY=
APP_URL=https://webinnovate.dev
LOG_CHANNEL=stack
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_CONNECTION=sync
BROADCAST_DRIVER=log
FILESYSTEM_DISK=local
EOF

# Update with environment variables if provided
if [ ! -z "$APP_URL" ]; then
    sed -i "s|APP_URL=.*|APP_URL=$APP_URL|g" .env
fi

# Create database file
echo "Setting up database..."
touch database/database.sqlite
chmod 664 database/database.sqlite

# Create storage directories
echo "Creating storage directories..."
mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs
chmod -R 775 storage bootstrap/cache

# Generate application key
echo "Generating application key..."
php artisan key:generate

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Clear caches
echo "Clearing caches..."
php artisan config:clear || true
php artisan cache:clear || true
php artisan view:clear || true

# Optimize for production
echo "Optimizing for production..."
php artisan optimize || true

# Set proper permissions for assets
echo "Setting asset permissions..."
chmod -R 755 public/assets

# Create symbolic link for storage
echo "Creating storage link..."
php artisan storage:link || true

echo "Laravel setup complete. Starting server..."
echo "Using PHP upload overrides: upload_max_filesize=32M post_max_size=32M"
exec php \
  -d upload_max_filesize=32M \
  -d post_max_size=32M \
  -d max_execution_time=180 \
  -d max_input_time=180 \
  artisan serve --host 0.0.0.0 --port 8000
