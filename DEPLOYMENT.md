# HiStudy Laravel Deployment Guide

This guide explains how to deploy the HiStudy Laravel application on Render.

## Deployment Options

### Option 1: Docker Deployment (Recommended)

1. Use the `render.yaml` file in the root directory
2. This will use the `Dockerfile` to create a containerized environment
3. The Dockerfile includes PHP 8.2, Composer, Node.js, and all required extensions

### Option 2: Direct PHP Deployment

1. Use the `render-simple.yaml` file
2. This approach installs PHP and dependencies directly in the Render environment
3. May be faster to deploy but less predictable

## Environment Variables

The following environment variables are configured:

- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL=https://your-app-name.onrender.com`
- `DB_CONNECTION=sqlite`
- `CACHE_DRIVER=file`
- `SESSION_DRIVER=file`
- `QUEUE_CONNECTION=sync`

## Database Configuration

The application is configured to use SQLite for simplicity in deployment. The database file will be created automatically at `database/database.sqlite`.

## Build Process

The build process includes:

1. Installing PHP dependencies via Composer
2. Installing Node.js dependencies
3. Building frontend assets with Vite
4. Generating application key
5. Running database migrations

## Troubleshooting

### Common Issues

1. **PHP not found**: Make sure you're using the Docker approach or the PHP environment
2. **Composer not found**: The build command includes Composer installation
3. **Database connection issues**: Ensure SQLite is properly configured
4. **Asset build failures**: Check that Node.js and npm are available

### Logs

Check the Render logs for detailed error information. Common log locations:
- Build logs: Available in the Render dashboard
- Application logs: `storage/logs/laravel.log`

## Local Development

For local development:

```bash
# Install dependencies
composer install
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start development server
php artisan serve

# Build assets (in another terminal)
npm run dev
```

## Production Considerations

1. **Environment Variables**: Set all required environment variables in Render dashboard
2. **Database**: Consider using a managed database service for production
3. **File Storage**: Use cloud storage for file uploads
4. **Caching**: Configure Redis or Memcached for better performance
5. **SSL**: Render provides automatic SSL certificates
