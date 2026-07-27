<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function show(string $slug): View
    {
        $post = BlogPost::query()
            ->published()
            ->where('slug', $slug)
            ->with(['author'])
            ->firstOrFail();

        $recentPosts = BlogPost::query()
            ->published()
            ->where('id', '!=', $post->id)
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->limit(5)
            ->get();

        return view('public.blog.show', compact('post', 'recentPosts'));
    }
}
