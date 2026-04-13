@csrf
@if ($article->exists)
    @method('PUT')
@endif

<div class="row g-3">
    <div class="col-lg-8">
        <label for="title" class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $article->title) }}" required maxlength="255">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @if ($article->exists)
            <div class="form-text">Slug: <code>{{ $article->slug }}</code> (set when the article was created)</div>
        @endif
    </div>
    <div class="col-lg-4">
        <label for="category_id" class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
        <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
            <option value="">Select category</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}" @selected(old('category_id', $article->category_id) == $cat->id)>{{ $cat->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="sort_order" class="form-label fw-semibold">Sort order <span class="text-danger">*</span></label>
        <input type="number" name="sort_order" id="sort_order" class="form-control @error('sort_order') is-invalid @enderror" value="{{ old('sort_order', $article->sort_order) }}" required min="0">
        @error('sort_order')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="status" class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
            <option value="draft" @selected(old('status', $article->status) === 'draft')>Draft</option>
            <option value="published" @selected(old('status', $article->status) === 'published')>Published</option>
        </select>
        @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="published_at" class="form-label fw-semibold">Publish date</label>
        <input type="datetime-local" name="published_at" id="published_at" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at', $article->published_at?->format('Y-m-d\TH:i')) }}">
        @error('published_at')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="excerpt" class="form-label fw-semibold">Excerpt</label>
        <textarea name="excerpt" id="excerpt" rows="3" class="form-control @error('excerpt') is-invalid @enderror">{{ old('excerpt', $article->excerpt) }}</textarea>
        @error('excerpt')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="doc_article_content" class="form-label fw-semibold">Content <span class="text-danger">*</span></label>
        <textarea name="content" id="doc_article_content" rows="12" class="form-control @error('content') is-invalid @enderror">{{ old('content', $article->content) }}</textarea>
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
        <div class="form-text">Max 2&nbsp;MB. Stored under <code>storage/app/public/docs/</code>.</div>
        <div class="mt-3">
            @if ($article->exists && $article->featured_image)
                <p class="small text-muted mb-1">Current image:</p>
                <img src="{{ asset('storage/'.$article->featured_image) }}" alt="" class="img-thumbnail rounded-3" style="max-height: 180px;" id="current_doc_featured_image">
            @endif
            <img src="" alt="" class="img-thumbnail rounded-3 mt-2 d-none" style="max-height: 180px;" id="doc_featured_preview">
        </div>
    </div>
</div>

<div class="d-flex gap-2 mt-4">
    <button type="submit" class="btn btn-primary px-4">{{ $article->exists ? 'Update article' : 'Create article' }}</button>
    <a href="{{ route('admin.docs.articles.index') }}" class="btn btn-outline-secondary">Cancel</a>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tinymce@7.6.0/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#doc_article_content',
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
            var preview = document.getElementById('doc_featured_preview');
            var current = document.getElementById('current_doc_featured_image');
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
