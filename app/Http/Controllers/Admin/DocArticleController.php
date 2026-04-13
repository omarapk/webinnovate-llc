<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocArticle;
use App\Models\DocCategory;
use App\Support\FeaturedImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocArticleController extends Controller
{
    public function index(Request $request): View
    {
        $query = DocArticle::query()
            ->with(['category'])
            ->orderByDesc('updated_at');

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->integer('category_id'));
        }

        if ($request->filled('status')) {
            $query->where('status', $request->string('status'));
        }

        $articles = $query->paginate(15)->withQueryString();
        $categories = DocCategory::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.articles.index', compact('articles', 'categories'));
    }

    public function create(): View
    {
        $article = new DocArticle([
            'status' => 'draft',
            'sort_order' => 0,
        ]);
        $categories = DocCategory::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.articles.create', compact('article', 'categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:doc_categories,id'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);

        $path = null;
        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('docs', FeaturedImage::disk());
        }

        DocArticle::create([
            ...collect($validated)->except(['featured_image'])->all(),
            'featured_image' => $path,
            'author_id' => $request->user()->id,
        ]);

        return redirect()->route('admin.docs.articles.index')
            ->with('success', 'Article created successfully.');
    }

    public function edit(DocArticle $article): View
    {
        $categories = DocCategory::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, DocArticle $article): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:doc_categories,id'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);

        $data = collect($validated)->except(['featured_image'])->all();

        if ($request->hasFile('featured_image')) {
            if ($article->featured_image) {
                FeaturedImage::deleteStored($article->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('docs', FeaturedImage::disk());
        }

        $article->update($data);

        return redirect()->route('admin.docs.articles.index')
            ->with('success', 'Article updated successfully.');
    }

    public function destroy(DocArticle $article): RedirectResponse
    {
        if ($article->featured_image) {
            FeaturedImage::deleteStored($article->featured_image);
        }

        $article->delete();

        return redirect()->route('admin.docs.articles.index')
            ->with('success', 'Article deleted successfully.');
    }

    public function toggleStatus(DocArticle $article): RedirectResponse
    {
        $article->status = $article->status === 'published' ? 'draft' : 'published';
        if ($article->status === 'published' && $article->published_at === null) {
            $article->published_at = now();
        }
        $article->save();

        return redirect()->route('admin.docs.articles.index')
            ->with('success', 'Article status updated.');
    }
}
