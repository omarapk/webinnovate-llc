@csrf
@if ($post->exists)
    @method('PUT')
@endif

<div class="row g-3">
    <div class="col-lg-8">
        <label for="title" class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" required maxlength="255">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @if ($post->exists)
            <div class="form-text">URL slug: <code>{{ $post->slug }}</code> (set when the post was created)</div>
        @endif
    </div>
    <div class="col-lg-4">
        <label for="category_id" class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
        <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
            <option value="">Select category</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}" @selected(old('category_id', $post->category_id) == $cat->id)>{{ $cat->name }}</option>
            @endforeach
        </select>
        @error('category_id')
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
        <div class="form-text">Max 2&nbsp;MB. Stored under <code>storage/app/public/blog/</code>.</div>
        <div class="mt-3">
            @if ($post->exists && $post->featured_image)
                <p class="small text-muted mb-1">Current image:</p>
                <img src="{{ asset('storage/'.$post->featured_image) }}" alt="" class="img-thumbnail rounded-3" style="max-height: 180px;" id="current_featured_image">
            @endif
            <img src="" alt="" class="img-thumbnail rounded-3 mt-2 d-none" style="max-height: 180px;" id="featured_preview">
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
    </script>
@endpush
