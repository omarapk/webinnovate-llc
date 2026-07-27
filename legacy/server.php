<?php

/**
 * Router for PHP's built-in web server (`php -S host:port server.php`).
 * Run from the project root (not inside `public/`).
 *
 * Example: php -S 127.0.0.1:8000 server.php
 * Then open http://127.0.0.1:8000/admin → Laravel handles the request.
 */
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/');

// Only serve real files — not directories (a `public/admin/` folder would steal `/admin` from Laravel).
if ($uri !== '/' && is_file(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
