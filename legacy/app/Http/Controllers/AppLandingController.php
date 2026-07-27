<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Support\AppCatalog;
use Illuminate\View\View;

class AppLandingController extends Controller
{
    public function show(string $slug): View
    {
        $app = AppCatalog::find($slug);
        abort_if($app === null, 404);

        $blogPosts = BlogPost::query()
            ->published()
            ->forApp($slug)
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->get();

        return view('apps.landing', compact('app', 'blogPosts'));
    }
}
