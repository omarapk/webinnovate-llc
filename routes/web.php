<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\DocArticleController;
use App\Http\Controllers\Admin\DocCategoryController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Public\BlogController;
use App\Http\Controllers\Public\DocsController;
use App\Http\Controllers\SitemapController;
use App\Models\BlogPost;
use App\Models\DocArticle;
use App\Models\DocCategory;
use Illuminate\Support\Facades\Route;

// Root route - displays welcome page with "Welcome to WebInnovate"
Route::get('/', function () {
    return view('welcome');
});

// Main route - serves multilingual.blade.php at /leadform URL (canonical blog listing for SEO)
Route::get('/leadform', function () {
    $blogPosts = BlogPost::query()
        ->where('status', 'published')
        ->whereNotNull('published_at')
        ->orderByDesc('published_at')
        ->orderByDesc('created_at')
        ->get();

    return view('home.multilingual', compact('blogPosts'));
})->name('blog.index');

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
Route::get('/docs/search', [DocsController::class, 'search'])->name('docs.search');
Route::get('/docs/category/{slug}', [DocsController::class, 'category'])->name('docs.category');
Route::get('/docs/{slug}', [DocsController::class, 'show'])->name('docs.show');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

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
            Route::get('system/php', function () {
                return response()->json([
                    'php_version' => PHP_VERSION,
                    'sapi' => php_sapi_name(),
                    'loaded_ini' => php_ini_loaded_file(),
                    'scanned_ini' => php_ini_scanned_files(),
                    'upload_max_filesize' => ini_get('upload_max_filesize'),
                    'post_max_size' => ini_get('post_max_size'),
                    'max_file_uploads' => ini_get('max_file_uploads'),
                    'max_execution_time' => ini_get('max_execution_time'),
                    'max_input_time' => ini_get('max_input_time'),
                    'memory_limit' => ini_get('memory_limit'),
                    'user_ini_filename' => ini_get('user_ini.filename'),
                    'user_ini_cache_ttl' => ini_get('user_ini.cache_ttl'),
                    'cwd' => getcwd(),
                ]);
            })->name('system.php');

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
