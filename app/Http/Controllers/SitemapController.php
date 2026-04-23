<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\DocArticle;
use App\Models\DocCategory;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $blogPosts = BlogPost::published()
            ->orderByDesc('updated_at')
            ->get(['slug', 'updated_at']);

        $docArticles = DocArticle::published()
            ->orderByDesc('updated_at')
            ->get(['slug', 'updated_at']);

        $docCategories = DocCategory::query()
            ->where('is_visible', true)
            ->orderByDesc('updated_at')
            ->get(['slug', 'updated_at']);

        $content = view('sitemap', compact('blogPosts', 'docArticles', 'docCategories'))->render();

        return response($content, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
