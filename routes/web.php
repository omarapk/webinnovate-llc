<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\PagesController;

// Main route - serves multilingual.blade.php at root URL
Route::get('/leadform', function () {
    return view('home.multilingual');
});

// Privacy Policy route
Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacyPolicy');

// Terms of Service route
Route::get('/terms-of-service', [PagesController::class, 'termsOfService'])->name('termsOfService');

// About Us route
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/feature-request', [PagesController::class, 'featureRequest'])->name('featureRequest');

Route::fallback(function () {
    return redirect('/');
});