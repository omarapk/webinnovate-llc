<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('log:tail {--lines=50 : Number of lines to show from the end}', function () {
    $path = storage_path('logs/laravel.log');

    if (! File::exists($path)) {
        $this->warn('No log file at: '.$path);

        return 0;
    }

    $n = max(1, (int) $this->option('lines'));
    $content = File::get($path);
    $lines = explode("\n", str_replace(["\r\n", "\r"], "\n", $content));

    foreach (array_slice($lines, -$n) as $line) {
        $this->line($line);
    }

    return 0;
})->purpose('Print the last lines of storage/logs/laravel.log');
