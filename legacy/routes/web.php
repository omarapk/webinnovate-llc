<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\DocArticleController;
use App\Http\Controllers\Admin\DocCategoryController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\AppBlogController;
use App\Http\Controllers\AppLandingController;
use App\Http\Controllers\AppLegalController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Public\DocsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SitemapController;
use App\Models\DocArticle;
use App\Models\DocCategory;
use App\Support\AppCatalog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Corporate pages (WebInnovate studio)
|--------------------------------------------------------------------------
*/
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [SiteController::class, 'privacy'])->name('site.privacy');
Route::get('/terms-of-use', [SiteController::class, 'terms'])->name('site.terms');

/*
|--------------------------------------------------------------------------
| WEBI app landings (one shared template, one data file per app)
|--------------------------------------------------------------------------
| Slugs come from config/site.php app_order (leadform, landing-page-builder,
| ordersheet). Adding a 4th app = adding config/apps/{slug}.php + its slug.
*/
$appSlugPattern = implode('|', array_map('preg_quote', AppCatalog::slugs()));

Route::get('/leadform', [AppLandingController::class, 'show'])
    ->defaults('slug', 'leadform')
    ->name('blog.index'); // legacy route name kept for backwards compatibility

Route::get('/{slug}', [AppLandingController::class, 'show'])
    ->where('slug', $appSlugPattern)
    ->name('apps.landing');

/*
|--------------------------------------------------------------------------
| LeadForm legal & company pages (original views, URLs unchanged)
|--------------------------------------------------------------------------
*/
Route::get('/leadform/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/leadform/cart-upsell-privacy-policy', [PagesController::class, 'cartUpsellPrivacyPolicy'])->name('cartUpsellPrivacyPolicy');
Route::get('/leadform/refund-policy', [PagesController::class, 'refundPolicy'])->name('refundPolicy');
Route::get('/leadform/terms-of-service', [PagesController::class, 'termsOfService'])->name('termsOfService');
Route::get('/leadform/about-us', [PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/leadform/feature-request', [PagesController::class, 'featureRequest'])->name('featureRequest');

/*
|--------------------------------------------------------------------------
| Legal pages for the other WEBI apps (shared templates)
|--------------------------------------------------------------------------
*/
Route::get('/{app}/privacy-policy', [AppLegalController::class, 'privacy'])
    ->where('app', 'landing-page-builder|ordersheet')
    ->name('apps.legal.privacy');
Route::get('/{app}/terms-of-service', [AppLegalController::class, 'terms'])
    ->where('app', 'landing-page-builder|ordersheet')
    ->name('apps.legal.terms');
Route::get('/{app}/refund-policy', [AppLegalController::class, 'refund'])
    ->where('app', 'landing-page-builder|ordersheet')
    ->name('apps.legal.refund');

/*
|--------------------------------------------------------------------------
| Per-app blog namespaces
|--------------------------------------------------------------------------
*/
Route::get('/{app}/blog', [AppBlogController::class, 'index'])
    ->where('app', $appSlugPattern)
    ->name('apps.blog.index');
Route::get('/{app}/blog/{slug}', [AppBlogController::class, 'show'])
    ->where('app', $appSlugPattern)
    ->name('apps.blog.show');

// Legacy blog URLs — existing articles belong to LeadForm, 301 to the new namespace.
Route::redirect('/blog', '/leadform/blog', 301);
Route::get('/blog/{slug}', function (string $slug) {
    return redirect("/leadform/blog/{$slug}", 301);
})->name('blog.show');
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
