<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\DocArticle;
use App\Models\DocCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocsController extends Controller
{
    public function index(Request $request): View
    {
        $query = mb_substr(trim((string) $request->get('q', '')), 0, 120);
        $like = $query === '' ? '' : '%'.addcslashes($query, '%_\\').'%';

        $mostReadArticles = DocArticle::query()
            ->published()
            ->with('category')
            ->orderByDesc('published_at')
            ->orderByDesc('updated_at')
            ->limit(6)
            ->get();

        $categories = $this->navCategories();

        $searchResults = null;
        if ($query !== '') {
            $searchResults = DocArticle::query()
                ->published()
                ->with('category')
                ->where(function ($q) use ($like) {
                    $q->where('title', 'like', $like)
                        ->orWhere('excerpt', 'like', $like);
                })
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->limit(25)
                ->get();
        }

        return view('public.docs.index', compact(
            'mostReadArticles',
            'categories',
            'searchResults',
            'query'
        ));
    }

    public function category(string $slug): View
    {
        $category = DocCategory::query()
            ->where('is_visible', true)
            ->where('slug', $slug)
            ->whereHas('section', fn ($q) => $q->where('is_visible', true))
            ->with('section')
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
            ->with(['category.section', 'author'])
            ->firstOrFail();

        $siblingArticles = DocArticle::query()
            ->published()
            ->where('category_id', $article->category_id)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get(['id', 'slug', 'title', 'sort_order']);

        $prev = null;
        $next = null;
        $idx = $siblingArticles->search(fn (DocArticle $a) => $a->id === $article->id);
        if ($idx !== false) {
            if ($idx > 0) {
                $prev = $siblingArticles[$idx - 1];
            }
            if ($idx < $siblingArticles->count() - 1) {
                $next = $siblingArticles[$idx + 1];
            }
        }

        return view('public.docs.show', compact(
            'article',
            'siblingArticles',
            'prev',
            'next'
        ));
    }

    /**
     * @return Collection<int, DocCategory>
     */
    protected function navCategories(): Collection
    {
        return DocCategory::query()
            ->where('doc_categories.is_visible', true)
            ->where('doc_sections.is_visible', true)
            ->join('doc_sections', 'doc_sections.id', '=', 'doc_categories.section_id')
            ->with(['section' => fn ($q) => $q->select('id', 'name', 'slug', 'sort_order')])
            ->withCount(['articles' => fn ($q) => $q->published()])
            ->orderBy('doc_sections.sort_order')
            ->orderBy('doc_sections.name')
            ->orderBy('doc_categories.sort_order')
            ->orderBy('doc_categories.name')
            ->select('doc_categories.*')
            ->get();
    }
}
