#!/bin/bash

set -e

echo "Starting Laravel application setup..."

# Install nginx
apt-get update && apt-get install -y nginx

# Create .env file with all required variables
echo "Creating .env file..."
cat > .env << EOF
APP_NAME=HiStudy
APP_ENV=production
APP_DEBUG=true
APP_KEY=
APP_URL=https://leadform-page.onrender.com
ASSET_URL=https://leadform-page.onrender.com
LOG_CHANNEL=stack
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_CONNECTION=sync
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

# Debug: List assets directory
echo "Checking assets directory..."
ls -la public/assets/css/vendor/ || echo "CSS vendor directory not found"
ls -la public/assets/css/ || echo "CSS directory not found"
ls -la public/assets/js/ || echo "JS directory not found"

# Create nginx configuration
echo "Creating nginx configuration..."
cat > /etc/nginx/sites-available/laravel << EOF
server {
    listen 8000;
    server_name _;
    root /var/www/public;
    index index.php;
    
    # Trust proxy headers for HTTPS
    set_real_ip_from 0.0.0.0/0;
    real_ip_header X-Forwarded-For;
    real_ip_recursive on;

    # Handle CSS files
    location ~* \.css$ {
        add_header Content-Type text/css;
        expires 1y;
        add_header Cache-Control "public, immutable";
        try_files \$uri =404;
    }

    # Handle JavaScript files
    location ~* \.js$ {
        add_header Content-Type application/javascript;
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

# Start PHP-FPM
php-fpm -D

# Start nginx
nginx -g "daemon off;"
