<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    public function index(Request $request): View
    {
        $query = BlogPost::query()
            ->orderByDesc('updated_at');

        if ($request->filled('status')) {
            $query->where('status', $request->string('status'));
        }

        $posts = $query->paginate(15)->withQueryString();

        return view('admin.blog.posts.index', compact('posts'));
    }

    public function create(): View
    {
        $post = new BlogPost([
            'status' => 'draft',
        ]);

        return view('admin.blog.posts.create', compact('post'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->merge([
            'slug' => filled($request->input('slug')) ? Str::slug($request->string('slug')) : null,
        ]);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('blog_posts', 'slug')],
            'author_name' => ['nullable', 'string', 'max:255'],
            'seo_title' => ['nullable', 'string', 'max:60'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'tags' => ['nullable', 'string', 'max:2000'],
            'alt_text' => ['nullable', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
        ]);

        if (blank($validated['slug'] ?? null)) {
            unset($validated['slug']);
        }

        $tags = $this->tagsFromCommaString($request->input('tags'));
        unset($validated['tags']);

        $path = null;
        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('blog', 'public');
        }

        BlogPost::create([
            ...$validated,
            'tags' => $tags,
            'featured_image' => $path,
            'author_id' => $request->user()->id,
        ]);

        return redirect()->route('admin.blog.posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function edit(BlogPost $post): View
    {
        return view('admin.blog.posts.edit', compact('post'));
    }

    public function update(Request $request, BlogPost $post): RedirectResponse
    {
        $request->merge([
            'slug' => Str::slug($request->string('slug')),
        ]);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('blog_posts', 'slug')->ignore($post->id)],
            'author_name' => ['nullable', 'string', 'max:255'],
            'seo_title' => ['nullable', 'string', 'max:60'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'tags' => ['nullable', 'string', 'max:2000'],
            'alt_text' => ['nullable', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
        ]);

        $tags = $this->tagsFromCommaString($request->input('tags'));
        unset($validated['tags']);

        $data = collect($validated)->except(['featured_image'])->all();
        $data['tags'] = $tags;

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

    /**
     * @return array<int, string>|null
     */
    protected function tagsFromCommaString(?string $input): ?array
    {
        if ($input === null || trim($input) === '') {
            return null;
        }

        $parts = array_values(array_filter(array_map('trim', explode(',', $input)), fn (string $t) => $t !== ''));

        return $parts === [] ? null : $parts;
    }
}
