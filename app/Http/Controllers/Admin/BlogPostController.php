<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    public function index(Request $request): View
    {
        $query = BlogPost::query()
            ->with('category')
            ->orderByDesc('updated_at');

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->integer('category_id'));
        }

        if ($request->filled('status')) {
            $query->where('status', $request->string('status'));
        }

        $posts = $query->paginate(15)->withQueryString();
        $categories = BlogCategory::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.blog.posts.index', compact('posts', 'categories'));
    }

    public function create(): View
    {
        $post = new BlogPost([
            'status' => 'draft',
        ]);
        $categories = BlogCategory::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.blog.posts.create', compact('post', 'categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:blog_categories,id'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
        ]);

        $path = null;
        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('blog', 'public');
        }

        BlogPost::create([
            ...collect($validated)->except(['featured_image'])->all(),
            'featured_image' => $path,
            'author_id' => $request->user()->id,
        ]);

        return redirect()->route('admin.blog.posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function edit(BlogPost $post): View
    {
        $categories = BlogCategory::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.blog.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, BlogPost $post): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:blog_categories,id'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
        ]);

        $data = collect($validated)->except(['featured_image'])->all();

        if ($request->hasFile('featured_image')) {
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }

        $post->update($data);

        return redirect()->route('admin.blog.posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(BlogPost $post): RedirectResponse
    {
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }

        $post->delete();

        return redirect()->route('admin.blog.posts.index')
            ->with('success', 'Post deleted successfully.');
    }

    public function toggleStatus(BlogPost $post): RedirectResponse
    {
        $post->status = $post->status === 'published' ? 'draft' : 'published';
        if ($post->status === 'published' && $post->published_at === null) {
            $post->published_at = now();
        }
        $post->save();

        return redirect()->route('admin.blog.posts.index')
            ->with('success', 'Post status updated.');
    }
}
