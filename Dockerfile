FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    zip \
    unzip \
    nodejs \
    npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# PHP upload limits (applies to the built-in server too)
COPY docker/php/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

# Copy existing application directory contents
COPY . /var/www

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install
RUN npm run build

# Create SQLite database file
RUN touch database/database.sqlite

# Create storage directories and set permissions
RUN mkdir -p storage/framework/cache \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && mkdir -p storage/logs \
    && chmod -R 775 storage \
    && chmod -R 775 bootstrap/cache

# Copy and make entrypoint script executable
COPY docker-entrypoint-simple.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint-simple.sh

EXPOSE 8000
ENV PORT=8000

# Use entrypoint script
ENTRYPOINT ["/usr/local/bin/docker-entrypoint-simple.sh"]
