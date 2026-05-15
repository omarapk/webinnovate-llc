#!/bin/bash

# Shared helpers for Docker entrypoints (Render, Railway, etc.)

map_platform_database_env() {
    if [ -n "$MYSQLHOST" ]; then
        export DB_CONNECTION="${DB_CONNECTION:-mysql}"
        export DB_HOST="$MYSQLHOST"
        export DB_PORT="${MYSQLPORT:-3306}"
        export DB_DATABASE="${MYSQLDATABASE:-$DB_DATABASE}"
        export DB_USERNAME="${MYSQLUSER:-$DB_USERNAME}"
        export DB_PASSWORD="${MYSQLPASSWORD:-$DB_PASSWORD}"
    fi

    if [ -n "$DATABASE_URL" ] && [ -z "$DB_URL" ]; then
        export DB_URL="$DATABASE_URL"
        export DB_CONNECTION="${DB_CONNECTION:-mysql}"
    fi
}

set_env_var() {
    local key="$1"
    local value="$2"

    if [ -z "$value" ]; then
        return 0
    fi

    if grep -q "^${key}=" .env 2>/dev/null; then
        sed -i "s|^${key}=.*|${key}=${value}|" .env
    else
        echo "${key}=${value}" >> .env
    fi
}

sync_database_env_to_dotenv() {
    map_platform_database_env

    set_env_var "DB_CONNECTION" "${DB_CONNECTION:-}"
    set_env_var "DB_HOST" "${DB_HOST:-}"
    set_env_var "DB_PORT" "${DB_PORT:-}"
    set_env_var "DB_DATABASE" "${DB_DATABASE:-}"
    set_env_var "DB_USERNAME" "${DB_USERNAME:-}"
    set_env_var "DB_PASSWORD" "${DB_PASSWORD:-}"
    set_env_var "DB_URL" "${DB_URL:-}"
}

database_driver() {
    echo "${DB_CONNECTION:-sqlite}"
}

wait_for_database() {
    local driver
    driver="$(database_driver)"

    if [ "$driver" = "sqlite" ]; then
        return 0
    fi

    echo "Waiting for database (${driver})..."
    local attempt
    for attempt in $(seq 1 30); do
        if php -r '
            $driver = getenv("DB_CONNECTION") ?: "mysql";
            if ($driver === "sqlite") {
                exit(0);
            }

            $url = getenv("DB_URL") ?: getenv("DATABASE_URL");
            if ($url) {
                try {
                    new PDO($url, null, null, [PDO::ATTR_TIMEOUT => 5]);
                    exit(0);
                } catch (Throwable $e) {
                    fwrite(STDERR, $e->getMessage() . PHP_EOL);
                    exit(1);
                }
            }

            $host = getenv("DB_HOST") ?: getenv("MYSQLHOST");
            $port = getenv("DB_PORT") ?: getenv("MYSQLPORT") ?: "3306";
            $database = getenv("DB_DATABASE") ?: getenv("MYSQLDATABASE");
            $username = getenv("DB_USERNAME") ?: getenv("MYSQLUSER");
            $password = getenv("DB_PASSWORD") ?: getenv("MYSQLPASSWORD");

            if (!$host || !$database) {
                fwrite(STDERR, "Database host or name is not configured." . PHP_EOL);
                exit(1);
            }

            $dsn = $driver === "pgsql"
                ? "pgsql:host={$host};port={$port};dbname={$database}"
                : "mysql:host={$host};port={$port};dbname={$database}";

            try {
                new PDO($dsn, $username, $password, [PDO::ATTR_TIMEOUT => 5]);
                exit(0);
            } catch (Throwable $e) {
                fwrite(STDERR, $e->getMessage() . PHP_EOL);
                exit(1);
            }
        '; then
            echo "Database is ready."
            return 0
        fi

        echo "Database not ready (attempt ${attempt}/30), retrying in 3s..."
        sleep 3
    done

    echo "Database did not become ready in time."
    return 1
}

run_migrations_with_retry() {
    local attempt
    for attempt in $(seq 1 10); do
        if php artisan migrate --force; then
            return 0
        fi

        echo "Migration failed (attempt ${attempt}/10), retrying in 5s..."
        sleep 5
    done

    return 1
}

app_port() {
    echo "${PORT:-8000}"
}
