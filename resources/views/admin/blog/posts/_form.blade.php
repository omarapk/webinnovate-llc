@csrf
@if ($post->exists)
    @method('PUT')
@endif

@php
    $tagsOld = old('tags');
    if (is_array($tagsOld)) {
        $tagsDisplay = implode(', ', $tagsOld);
    } elseif (is_string($tagsOld)) {
        $tagsDisplay = $tagsOld;
    } else {
        $tagsDisplay = is_array($post->tags) && count($post->tags) ? implode(', ', $post->tags) : '';
    }
@endphp

<div class="row g-3">
    <div class="col-lg-8">
        <label for="title" class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" required>
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-8">
        <label for="author_name" class="form-label fw-semibold">Author Name (optional)</label>
        <input type="text" name="author_name" id="author_name" class="form-control @error('author_name') is-invalid @enderror" value="{{ old('author_name', $post->author_name) }}" placeholder="e.g. imad test">
        @error('author_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="status" class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
            <option value="draft" @selected(old('status', $post->status) === 'draft')>Draft</option>
            <option value="published" @selected(old('status', $post->status) === 'published')>Published</option>
        </select>
        @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="published_at" class="form-label fw-semibold">Publish date</label>
        <input type="datetime-local" name="published_at" id="published_at" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at', $post->published_at?->format('Y-m-d\TH:i')) }}">
        @error('published_at')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="excerpt" class="form-label fw-semibold">Excerpt</label>
        <textarea name="excerpt" id="excerpt" rows="3" class="form-control @error('excerpt') is-invalid @enderror">{{ old('excerpt', $post->excerpt) }}</textarea>
        @error('excerpt')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="post_content" class="form-label fw-semibold">Content <span class="text-danger">*</span></label>
        <textarea name="content" id="post_content" rows="12" class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="featured_image" class="form-label fw-semibold">Featured image</label>
        <input type="file" name="featured_image" id="featured_image" accept="image/*" class="form-control @error('featured_image') is-invalid @enderror">
        @error('featured_image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="form-text">Max 2&nbsp;MB. @if (config('filesystems.featured_image_disk') === 'cloudinary')Delivered via Cloudinary (folder <code>{{ config('filesystems.disks.cloudinary.prefix', 'leadform') }}/blog</code>). @else Stored under <code>storage/app/public/blog/</code>. @endif</div>
        <div class="mt-3">
            @if ($post->exists && $post->featured_image)
                <p class="small text-muted mb-1">Current image:</p>
                <img src="{{ $post->featured_image_url }}" alt="" class="img-thumbnail rounded-3" style="max-height: 180px;" id="current_featured_image">
            @endif
            <img src="" alt="" class="img-thumbnail rounded-3 mt-2 d-none" style="max-height: 180px;" id="featured_preview">
        </div>
    </div>
    <div class="col-12">
        <label for="alt_text" class="form-label fw-semibold">Alt Text for Image (optional)</label>
        <input type="text" name="alt_text" id="alt_text" class="form-control @error('alt_text') is-invalid @enderror" value="{{ old('alt_text', $post->alt_text) }}">
        @error('alt_text')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="card mt-3 border shadow-sm">
    <div class="card-header fw-semibold d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#seoSettings" aria-expanded="false" aria-controls="seoSettings" role="button" style="cursor: pointer;">
        <span>SEO Settings</span>
        <span class="small text-muted">▼</span>
    </div>
    <div id="seoSettings" class="collapse">
        <div class="card-body">
            <div class="mb-3">
                <label for="seo_title" class="form-label fw-semibold">SEO Title</label>
                <input type="text" name="seo_title" id="seo_title" class="form-control @error('seo_title') is-invalid @enderror" value="{{ old('seo_title', $post->seo_title) }}">
                <div class="form-text mt-1 mb-0">Optional. Used for search result titles when set.</div>
                @error('seo_title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="meta_description" class="form-label fw-semibold">Meta Description</label>
                <textarea name="meta_description" id="meta_description" rows="3" class="form-control @error('meta_description') is-invalid @enderror">{{ old('meta_description', $post->meta_description) }}</textarea>
                <div class="form-text mt-1 mb-0">Optional. Shown as the snippet in search results when set.</div>
                @error('meta_description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="post_slug" class="form-label fw-semibold">URL Slug</label>
                <input type="text" name="slug" id="post_slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $post->slug) }}" @if (! $post->exists) placeholder="auto-from-title" @endif {{ $post->exists ? 'required' : '' }}>
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if (! $post->exists)
                    <div class="form-text">Leave blank to generate from the title. You can edit before saving.</div>
                @endif
            </div>
            <div class="mb-0">
                <label for="tags" class="form-label fw-semibold">Tags</label>
                <input type="text" name="tags" id="tags" class="form-control @error('tags') is-invalid @enderror" value="{{ $tagsDisplay }}" placeholder="e.g. shopify, cod, tutorial">
                @error('tags')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-text">Comma-separated.</div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex gap-2 mt-4">
    <button type="submit" class="btn btn-primary px-4">{{ $post->exists ? 'Update post' : 'Create post' }}</button>
    <a href="{{ route('admin.blog.posts.index') }}" class="btn btn-outline-secondary">Cancel</a>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tinymce@7.6.0/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#post_content',
            height: 420,
            menubar: false,
            license_key: 'gpl',
            plugins: 'lists link table code autoresize fullscreen',
            toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright | bullist numlist | link table | code fullscreen',
            branding: false,
            promotion: false,
            relative_urls: false,
            convert_urls: false,
        });

        (function () {
            var input = document.getElementById('featured_image');
            var preview = document.getElementById('featured_preview');
            var current = document.getElementById('current_featured_image');
            if (!input || !preview) return;
            input.addEventListener('change', function () {
                var file = input.files && input.files[0];
                if (!file) {
                    preview.classList.add('d-none');
                    preview.removeAttribute('src');
                    if (current) current.classList.remove('d-none');
                    return;
                }
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
                if (current) current.classList.add('d-none');
            });
        })();

        (function () {
            function slugify(str) {
                return str
                    .toLowerCase()
                    .trim()
                    .replace(/[\s_]+/g, '-')
                    .replace(/[^\w\-]+/g, '')
                    .replace(/\-\-+/g, '-')
                    .replace(/^-+|-+$/g, '');
            }

            var titleField = document.getElementById('title');
            var slugField = document.getElementById('post_slug');
            var slugTouched = {{ $post->exists ? 'true' : 'false' }};

            if (slugField && titleField) {
                slugField.addEventListener('input', function () {
                    slugTouched = true;
                });
                titleField.addEventListener('input', function () {
                    if (!slugTouched) {
                        slugField.value = slugify(titleField.value);
                    }
                });
            }

        })();
    </script>
@endpush
