#!/bin/bash

set -e

APP_ROOT="${APP_ROOT:-/var/www}"
# shellcheck source=docker/entrypoint-common.sh
source "${APP_ROOT}/docker/entrypoint-common.sh"

echo "Starting Laravel application setup..."

map_platform_database_env

if [ ! -f .env ]; then
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
fi

if [ ! -z "$APP_URL" ]; then
    set_env_var "APP_URL" "$APP_URL"
fi

sync_database_env_to_dotenv

if [ "$(database_driver)" = "sqlite" ]; then
    echo "Setting up SQLite database..."
    touch database/database.sqlite
    chmod 664 database/database.sqlite
fi

echo "Creating storage directories..."
mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs
chmod -R 775 storage bootstrap/cache

if ! grep -q "APP_KEY=base64:" .env; then
    echo "Generating application key..."
    php artisan key:generate
fi

wait_for_database
echo "Running migrations..."
run_migrations_with_retry

echo "Clearing caches..."
php artisan config:clear || true
php artisan cache:clear || true
php artisan view:clear || true

echo "Optimizing for production..."
php artisan optimize || true

echo "Setting asset permissions..."
chmod -R 755 public/assets

echo "Creating storage link..."
php artisan storage:link || true

LISTEN_PORT="$(app_port)"
echo "Laravel setup complete. Starting server on port ${LISTEN_PORT}..."
echo "Using PHP upload overrides: upload_max_filesize=32M post_max_size=32M"
exec php \
  -d upload_max_filesize=32M \
  -d post_max_size=32M \
  -d max_execution_time=180 \
  -d max_input_time=180 \
  artisan serve --host 0.0.0.0 --port "${LISTEN_PORT}"
