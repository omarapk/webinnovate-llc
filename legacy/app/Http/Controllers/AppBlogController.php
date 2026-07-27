<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Support\AppCatalog;
use Illuminate\View\View;

class AppBlogController extends Controller
{
    public function index(string $app): View
    {
        $appData = AppCatalog::find($app);
        abort_if($appData === null, 404);

        $posts = BlogPost::query()
            ->published()
            ->forApp($app)
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->paginate(12);

        return view('public.blog.index', ['app' => $appData, 'posts' => $posts]);
    }

    public function show(string $app, string $slug): View
    {
        $appData = AppCatalog::find($app);
        abort_if($appData === null, 404);

        $post = BlogPost::query()
            ->published()
            ->forApp($app)
            ->where('slug', $slug)
            ->with(['author'])
            ->firstOrFail();

        $recentPosts = BlogPost::query()
            ->published()
            ->forApp($app)
            ->where('id', '!=', $post->id)
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->limit(5)
            ->get();

        return view('public.blog.show', ['app' => $appData, 'post' => $post, 'recentPosts' => $recentPosts]);
    }
}
