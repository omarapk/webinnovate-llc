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
LOG_CHANNEL=stack
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_CONNECTION=sync
EOF
fi

if [ ! -z "$APP_URL" ]; then
    echo "Setting APP_URL to: $APP_URL"
    set_env_var "APP_URL" "$APP_URL"
fi

if [ ! -z "$APP_KEY" ]; then
    echo "Setting APP_KEY from environment variable"
    set_env_var "APP_KEY" "$APP_KEY"
fi

sync_database_env_to_dotenv

if [ ! -z "$CACHE_DRIVER" ]; then
    set_env_var "CACHE_DRIVER" "$CACHE_DRIVER"
fi

if [ ! -z "$SESSION_DRIVER" ]; then
    set_env_var "SESSION_DRIVER" "$SESSION_DRIVER"
fi

echo "Creating storage directories..."
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs

chmod -R 775 storage
chmod -R 775 bootstrap/cache

if [ "$(database_driver)" = "sqlite" ]; then
    echo "Setting up SQLite database..."
    touch database/database.sqlite
    chmod 664 database/database.sqlite
fi

if ! grep -q "APP_KEY=base64:" .env; then
    echo "Generating application key..."
    php artisan key:generate
fi

wait_for_database
echo "Running migrations..."
run_migrations_with_retry

echo "Clearing caches..."
php artisan config:clear || echo "Config clear failed, continuing..."
php artisan cache:clear || echo "Cache clear failed, continuing..."
php artisan view:clear || echo "View clear failed, continuing..."

echo "Current configuration:"
grep -E "^(APP_NAME|APP_ENV|APP_DEBUG|APP_URL|DB_CONNECTION|DB_HOST|DB_DATABASE)" .env || true

LISTEN_PORT="$(app_port)"
echo "Starting Laravel server on port ${LISTEN_PORT}..."
echo "Using PHP upload overrides: upload_max_filesize=32M post_max_size=32M"
exec php \
  -d upload_max_filesize=32M \
  -d post_max_size=32M \
  -d max_execution_time=180 \
  -d max_input_time=180 \
  artisan serve --host 0.0.0.0 --port "${LISTEN_PORT}"
