@csrf
@if ($category->exists)
    @method('PUT')
@endif

<div class="row g-3">
    <div class="col-md-8">
        <label for="name" class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}" required maxlength="255">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @if ($category->exists)
            <div class="form-text">Slug is generated automatically and is currently: <code>{{ $category->slug }}</code></div>
        @endif
    </div>
    <div class="col-md-4">
        <label for="sort_order" class="form-label fw-semibold">Sort order <span class="text-danger">*</span></label>
        <input type="number" name="sort_order" id="sort_order" class="form-control @error('sort_order') is-invalid @enderror" value="{{ old('sort_order', $category->sort_order) }}" required min="0">
        @error('sort_order')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="description" class="form-label fw-semibold">Description</label>
        <textarea name="description" id="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $category->description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="d-flex gap-2 mt-4">
    <button type="submit" class="btn btn-primary px-4">{{ $category->exists ? 'Update category' : 'Create category' }}</button>
    <a href="{{ route('admin.blog.categories.index') }}" class="btn btn-outline-secondary">Cancel</a>
</div>
