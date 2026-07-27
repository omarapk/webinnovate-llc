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
        $uploaded = $request->file('featured_image');
        if ($uploaded instanceof \Illuminate\Http\UploadedFile && ! $uploaded->isValid()) {
            return back()->withInput()->withErrors([
                'featured_image' => $uploaded->getErrorMessage().' (upload error code '.$uploaded->getError().')',
            ]);
        }

        $validated = $request->validate([
            'title' => ['required', 'string'],
            'category_id' => ['required', 'exists:doc_categories,id'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image' => [
                'nullable',
                'file',
                'max:32768',
                'mimetypes:image/jpeg,image/png,image/webp,image/gif,image/svg+xml',
            ],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);

        $path = null;
        if ($request->has('featured_image') && $uploaded instanceof \Illuminate\Http\UploadedFile && $uploaded->isValid()) {
            try {
                $path = $uploaded->store('docs', FeaturedImage::disk());
            } catch (\Throwable $e) {
                return back()->withInput()->withErrors([
                    'featured_image' => $e->getMessage().($e->getPrevious() ? ' | '.$e->getPrevious()->getMessage() : ''),
                ]);
            }
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
        $uploaded = $request->file('featured_image');
        if ($uploaded instanceof \Illuminate\Http\UploadedFile && ! $uploaded->isValid()) {
            return back()->withInput()->withErrors([
                'featured_image' => $uploaded->getErrorMessage().' (upload error code '.$uploaded->getError().')',
            ]);
        }

        $validated = $request->validate([
            'title' => ['required', 'string'],
            'category_id' => ['required', 'exists:doc_categories,id'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image' => [
                'nullable',
                'file',
                'max:32768',
                'mimetypes:image/jpeg,image/png,image/webp,image/gif,image/svg+xml',
            ],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);

        $data = collect($validated)->except(['featured_image'])->all();

        if ($request->has('featured_image') && $uploaded instanceof \Illuminate\Http\UploadedFile && $uploaded->isValid()) {
            try {
                $previousFeaturedImage = $article->featured_image;
                $data['featured_image'] = $uploaded->store('docs', FeaturedImage::disk());
                if ($previousFeaturedImage) {
                    FeaturedImage::deleteStored($previousFeaturedImage);
                }
            } catch (\Throwable $e) {
                return back()->withInput()->withErrors([
                    'featured_image' => $e->getMessage().($e->getPrevious() ? ' | '.$e->getPrevious()->getMessage() : ''),
                ]);
            }
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
