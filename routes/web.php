<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AffiliateController;

// Main route - serves multilingual.blade.php at root URL
Route::get('/', function () {
    return view('home.multilingual');
});

// Affiliate routes
// Route::get('/affiliate', [AffiliateController::class, 'showForm'])->name('affiliate.application');
// Route::post('/affiliate/submit', [AffiliateController::class, 'submitForm'])->name('affiliate.submit');

// Fallback route - redirect all other routes to home
Route::fallback(function () {
    return redirect('/');
});