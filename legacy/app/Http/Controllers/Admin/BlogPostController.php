<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Support\FeaturedImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        $uploaded = $request->file('featured_image');
        if ($uploaded instanceof \Illuminate\Http\UploadedFile && ! $uploaded->isValid()) {
            return back()->withInput()->withErrors([
                'featured_image' => $uploaded->getErrorMessage().' (upload error code '.$uploaded->getError().')',
            ]);
        }

        $request->merge([
            'slug' => filled($request->input('slug')) ? Str::slug($request->string('slug')) : null,
        ]);

        $validated = $request->validate([
            'title' => ['required', 'string'],
            'app_slug' => ['required', 'string', \Illuminate\Validation\Rule::in(\App\Support\AppCatalog::slugs())],
            'slug' => ['nullable', 'string', 'max:768', Rule::unique('blog_posts', 'slug')],
            'author_name' => ['nullable', 'string'],
            'seo_title' => ['nullable', 'string'],
            'meta_description' => ['nullable', 'string'],
            'tags' => ['nullable', 'string'],
            'alt_text' => ['nullable', 'string'],
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
        ]);

        if (blank($validated['slug'] ?? null)) {
            unset($validated['slug']);
        }

        $tags = $this->tagsFromCommaString($request->input('tags'));
        unset($validated['tags']);

        $path = null;
        if ($request->has('featured_image') && $uploaded instanceof \Illuminate\Http\UploadedFile && $uploaded->isValid()) {
            try {
                $path = $uploaded->store('blog', FeaturedImage::disk());
            } catch (\Throwable $e) {
                return back()->withInput()->withErrors([
                    'featured_image' => $e->getMessage().($e->getPrevious() ? ' | '.$e->getPrevious()->getMessage() : ''),
                ]);
            }
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
        set_time_limit(120);
        ini_set('max_execution_time', '120');

        $uploaded = $request->file('featured_image');
        if ($uploaded instanceof \Illuminate\Http\UploadedFile && ! $uploaded->isValid()) {
            return back()->withInput()->withErrors([
                'featured_image' => $uploaded->getErrorMessage().' (upload error code '.$uploaded->getError().')',
            ]);
        }

        Log::info('Update called', $request->except(['_token', 'content', 'featured_image']));

        $request->merge([
            'slug' => Str::slug($request->string('slug')),
        ]);

        $validated = $request->validate([
            'title' => ['required', 'string'],
            'app_slug' => ['required', 'string', \Illuminate\Validation\Rule::in(\App\Support\AppCatalog::slugs())],
            'slug' => ['required', 'string', 'max:768', Rule::unique('blog_posts', 'slug')->ignore($post->id)],
            'author_name' => ['nullable', 'string'],
            'seo_title' => ['nullable', 'string'],
            'meta_description' => ['nullable', 'string'],
            'tags' => ['nullable', 'string'],
            'alt_text' => ['nullable', 'string'],
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
        ]);

        $tags = $this->tagsFromCommaString($request->input('tags'));
        unset($validated['tags']);

        $data = collect($validated)->except(['featured_image'])->all();
        $data['tags'] = $tags;

        if ($request->has('featured_image') && $uploaded instanceof \Illuminate\Http\UploadedFile && $uploaded->isValid()) {
            try {
                Log::info('Upload attempt', [
                    'has_file' => true,
                    'disk' => FeaturedImage::disk(),
                ]);

                $previousFeaturedImage = $post->featured_image;
                $newPath = $uploaded->store('blog', FeaturedImage::disk());

                Log::info('Upload result', ['path' => $newPath ?? 'null']);

                if ($previousFeaturedImage) {
                    FeaturedImage::deleteStored($previousFeaturedImage);
                }

                $data['featured_image'] = $newPath;
            } catch (\Throwable $e) {
                Log::error('Upload failed', [
                    'message' => $e->getMessage(),
                    'previous' => $e->getPrevious()?->getMessage(),
                    'trace' => $e->getTraceAsString(),
                ]);

                return back()->withInput()->withErrors([
                    'featured_image' => $e->getMessage()
                        .($e->getPrevious() !== null ? ' | '.$e->getPrevious()->getMessage() : ''),
                ]);
            }
        }

        $post->update($data);

        return redirect()->route('admin.blog.posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(BlogPost $post): RedirectResponse
    {
        if ($post->featured_image) {
            FeaturedImage::deleteStored($post->featured_image);
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
