<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Bootstrap admin (database seeding)
    |--------------------------------------------------------------------------
    |
    | Used by AdminUserSeeder. Values are read via config() so they remain
    | available when configuration is cached (`php artisan config:cache`).
    | Do not call env('ADMIN_*') outside config files in application code.
    |
    */

    'email' => env('ADMIN_EMAIL'),

    'password' => env('ADMIN_PASSWORD'),

];
