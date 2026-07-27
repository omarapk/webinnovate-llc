<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // Fix Cloudinary SSL on Windows - force Guzzle to use CA bundle
        $caBundle = 'C:\\php\\cacert.pem';
        if (file_exists($caBundle)) {
            $stack = \GuzzleHttp\HandlerStack::create();
            app()->bind(\GuzzleHttp\Client::class, fn () => new \GuzzleHttp\Client([
                'verify' => $caBundle,
                'handler' => $stack,
            ]));
        }

        // Force HTTPS for all URLs in production
        if (app()->environment('production')) {
            \URL::forceScheme('https');
            \URL::forceRootUrl('https://webinnovate.dev');
        }
    }
}
