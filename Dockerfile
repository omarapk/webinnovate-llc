FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
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

# Copy existing application directory contents
COPY . /var/www

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install
RUN npm run build

# Create SQLite database file
RUN touch database/database.sqlite

# Create .env file with basic configuration
RUN echo "APP_NAME=HiStudy" > .env && \
    echo "APP_ENV=production" >> .env && \
    echo "APP_DEBUG=false" >> .env && \
    echo "LOG_CHANNEL=stack" >> .env && \
    echo "DB_CONNECTION=sqlite" >> .env && \
    echo "DB_DATABASE=database/database.sqlite" >> .env && \
    echo "CACHE_DRIVER=file" >> .env && \
    echo "SESSION_DRIVER=file" >> .env && \
    echo "SESSION_LIFETIME=120" >> .env && \
    echo "QUEUE_CONNECTION=sync" >> .env

# Copy and make entrypoint script executable
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Expose port 8000
EXPOSE 8000

# Use entrypoint script
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
