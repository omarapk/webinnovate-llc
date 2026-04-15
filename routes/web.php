<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\DocArticleController;
use App\Http\Controllers\Admin\DocCategoryController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Public\BlogController;
use App\Http\Controllers\Public\DocsController;
use App\Models\BlogPost;
use App\Models\DocArticle;
use App\Models\DocCategory;
use Illuminate\Support\Facades\Route;

// Root route - displays welcome page with "Welcome to WebInnovate"
Route::get('/', function () {
    return view('welcome');
});

// Main route - serves multilingual.blade.php at /leadform URL
Route::get('/leadform', function () {
    $blogPosts = BlogPost::query()
        ->orderByDesc('published_at')
        ->orderByDesc('created_at')
        ->get();

    return view('home.multilingual', compact('blogPosts'));
});

// Privacy Policy route
Route::get('/leadform/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/leadform/cart-upsell-privacy-policy', [PagesController::class, 'cartUpsellPrivacyPolicy'])->name('cartUpsellPrivacyPolicy');
Route::get('/leadform/refund-policy', [PagesController::class, 'refundPolicy'])->name('refundPolicy');

// Terms of Service route
Route::get('/leadform/terms-of-service', [PagesController::class, 'termsOfService'])->name('termsOfService');

// About Us route
Route::get('/leadform/about-us', [PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/leadform/feature-request', [PagesController::class, 'featureRequest'])->name('featureRequest');

Route::redirect('/blog', '/leadform', 301);
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/docs', [DocsController::class, 'index'])->name('docs.index');
Route::get('/docs/category/{slug}', [DocsController::class, 'category'])->name('docs.category');
Route::get('/docs/{slug}', [DocsController::class, 'show'])->name('docs.show');

Route::get('/affiliate/apply', [AffiliateController::class, 'showForm'])->name('affiliate.show');
Route::post('/affiliate/apply', [AffiliateController::class, 'submitForm'])->name('affiliate.submit');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        if (auth()->check() && auth()->user()->is_admin === true) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.login');
    })->name('index');

    Route::get('login', [AdminLoginController::class, 'showLogin'])->name('login');
    Route::post('login', [AdminLoginController::class, 'login'])->name('login.submit');

    Route::middleware('auth')->group(function () {
        Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');
        Route::get('dashboard', function () {
            return view('admin.dashboard', [
                'totalBlogPosts' => BlogPost::query()->count(),
                'totalDocArticles' => DocArticle::query()->count(),
                'publishedBlogPosts' => BlogPost::query()->where('status', 'published')->count(),
                'draftBlogPosts' => BlogPost::query()->where('status', 'draft')->count(),
                'totalDocCategories' => DocCategory::query()->count(),
                'publishedDocArticles' => DocArticle::query()->published()->count(),
                'draftDocArticles' => DocArticle::query()->where('status', 'draft')->count(),
            ]);
        })->middleware('admin')->name('dashboard');

        Route::middleware('admin')->group(function () {
            Route::patch('blog/posts/{post}/toggle', [BlogPostController::class, 'toggleStatus'])
                ->name('blog.posts.toggle');

            Route::resource('blog/posts', BlogPostController::class)
                ->except(['show'])
                ->names('blog.posts')
                ->parameters(['posts' => 'post']);

            Route::patch('docs/articles/{article}/toggle', [DocArticleController::class, 'toggleStatus'])
                ->name('docs.articles.toggle');

            Route::resource('docs/categories', DocCategoryController::class)
                ->except(['show'])
                ->names('docs.categories')
                ->parameters(['categories' => 'category']);

            Route::resource('docs/articles', DocArticleController::class)
                ->except(['show'])
                ->names('docs.articles')
                ->parameters(['articles' => 'article']);
        });
    });
});

// Route::fallback(function () {
//     return redirect('/');
// });
