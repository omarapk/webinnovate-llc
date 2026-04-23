<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\DocArticle;
use App\Models\DocCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocsController extends Controller
{
    public function index(): View
    {
        $mostReadArticles = DocArticle::query()
            ->published()
            ->with('category')
            ->orderByDesc('published_at')
            ->orderByDesc('updated_at')
            ->limit(6)
            ->get();

        $categories = $this->navCategories();

        return view('public.docs.index', compact(
            'mostReadArticles',
            'categories'
        ));
    }

    public function search(Request $request): JsonResponse|View
    {
        $query = mb_substr(trim((string) $request->get('q', '')), 0, 120);

        $results = collect();
        if (strlen($query) >= 2) {
            $like = '%'.addcslashes($query, '%_\\').'%';
            $results = DocArticle::published()
                ->where(function ($q) use ($like) {
                    $q->where('title', 'like', $like)
                        ->orWhere('excerpt', 'like', $like)
                        ->orWhere('content', 'like', $like);
                })
                ->with('category')
                ->orderByDesc('published_at')
                ->limit(20)
                ->get();
        }

        if ($request->ajax() || $request->boolean('ajax')) {
            return response()->json([
                'html' => view('public.docs.partials.search-results', compact('results', 'query'))->render(),
            ]);
        }

        return view('public.docs.search', compact('results', 'query'));
    }

    public function category(string $slug): View
    {
        $category = DocCategory::query()
            ->where('is_visible', true)
            ->where('slug', $slug)
            ->firstOrFail();

        $articles = DocArticle::query()
            ->published()
            ->where('category_id', $category->id)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        $navCategories = $this->navCategories();

        return view('public.docs.category', compact('category', 'articles', 'navCategories'));
    }

    public function show(string $slug): View
    {
        $article = DocArticle::query()
            ->published()
            ->where('slug', $slug)
            ->with(['category', 'author'])
            ->firstOrFail();

        $siblingArticles = DocArticle::query()
            ->published()
            ->where('category_id', $article->category_id)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get(['id', 'slug', 'title']);

        return view('public.docs.show', compact('article', 'siblingArticles'));
    }

    /**
     * @return Collection<int, DocCategory>
     */
    protected function navCategories(): Collection
    {
        return DocCategory::query()
            ->where('is_visible', true)
            ->withCount(['articles' => fn ($q) => $q->published()])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();
    }
}
