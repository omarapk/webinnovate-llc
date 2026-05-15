#!/bin/bash

set -e

APP_ROOT="${APP_ROOT:-/var/www}"
cd "${APP_ROOT}"

# shellcheck source=docker/entrypoint-common.sh
source "${APP_ROOT}/docker/entrypoint-common.sh"

echo "Starting Laravel application setup..."

map_platform_database_env

# Install nginx
apt-get update && apt-get install -y nginx

if [ ! -f .env ]; then
    echo "Creating .env file..."
    cat > .env << EOF
APP_NAME=HiStudy
APP_ENV=production
APP_DEBUG=true
APP_KEY=
APP_URL=https://webinnovate.dev
ASSET_URL=https://webinnovate.dev
MIX_ASSET_URL=https://webinnovate.dev
ASSET_URL_HTTPS=https://webinnovate.dev
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

# Debug: List assets directory
echo "Checking assets directory..."
ls -la public/assets/css/vendor/ || echo "CSS vendor directory not found"
ls -la public/assets/css/ || echo "CSS directory not found"
ls -la public/assets/js/ || echo "JS directory not found"

LISTEN_PORT="$(app_port)"

# Create nginx configuration
echo "Creating nginx configuration on port ${LISTEN_PORT}..."
cat > /etc/nginx/sites-available/laravel << EOF
server {
    listen ${LISTEN_PORT};
    server_name _;
    root /var/www/public;
    index index.php;

    # Allow larger admin uploads (featured images)
    client_max_body_size 32m;
    
    # Trust proxy headers for HTTPS
    set_real_ip_from 0.0.0.0/0;
    real_ip_header X-Forwarded-For;
    real_ip_recursive on;

    # Handle CSS files - must come before PHP location
    location ~* \.(css)$ {
        add_header Content-Type "text/css; charset=utf-8";
        expires 1y;
        add_header Cache-Control "public, immutable";
        try_files \$uri =404;
    }

    # Handle JavaScript files - must come before PHP location
    location ~* \.(js)$ {
        add_header Content-Type "application/javascript; charset=utf-8";
        expires 1y;
        add_header Cache-Control "public, immutable";
        try_files \$uri =404;
    }

    # Handle image files
    location ~* \.(png|jpg|jpeg|gif|ico|svg|webp)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
        try_files \$uri =404;
    }

    # Handle font files
    location ~* \.(woff|woff2|ttf|eot)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
        try_files \$uri =404;
    }

    # Handle PHP files
    location ~ \.php$ {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    # Handle all other requests
    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }
}
EOF

# Enable the site
ln -sf /etc/nginx/sites-available/laravel /etc/nginx/sites-enabled/
rm -f /etc/nginx/sites-enabled/default

# Test nginx configuration
echo "Testing nginx configuration..."
nginx -t

# Start PHP-FPM
echo "Starting PHP-FPM..."
php-fpm -D

# Start nginx
echo "Starting nginx..."
nginx -g "daemon off;"
