<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocArticle;
use App\Models\DocCategory;
use App\Models\DocSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class DocArticleController extends Controller
{
    public function index(Request $request): View
    {
        $query = DocArticle::query()
            ->with(['category.section'])
            ->orderByDesc('updated_at');

        if ($request->filled('section_id')) {
            $sectionId = $request->integer('section_id');
            $query->whereHas('category', function ($q) use ($sectionId) {
                $q->where('section_id', $sectionId);
            });
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->integer('category_id'));
        }

        if ($request->filled('status')) {
            $query->where('status', $request->string('status'));
        }

        $articles = $query->paginate(15)->withQueryString();
        $sections = DocSection::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();
        $categories = DocCategory::query()
            ->with('section')
            ->orderBy('section_id')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.articles.index', compact('articles', 'sections', 'categories'));
    }

    public function create(): View
    {
        $article = new DocArticle([
            'status' => 'draft',
            'sort_order' => 0,
        ]);
        $sections = DocSection::query()
            ->with(['categories' => fn ($q) => $q->orderBy('sort_order')->orderBy('name')])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.articles.create', compact('article', 'sections'));
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
            $path = $request->file('featured_image')->store('docs', 'public');
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
        $sections = DocSection::query()
            ->with(['categories' => fn ($q) => $q->orderBy('sort_order')->orderBy('name')])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.articles.edit', compact('article', 'sections'));
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
                Storage::disk('public')->delete($article->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('docs', 'public');
        }

        $article->update($data);

        return redirect()->route('admin.docs.articles.index')
            ->with('success', 'Article updated successfully.');
    }

    public function destroy(DocArticle $article): RedirectResponse
    {
        if ($article->featured_image) {
            Storage::disk('public')->delete($article->featured_image);
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
