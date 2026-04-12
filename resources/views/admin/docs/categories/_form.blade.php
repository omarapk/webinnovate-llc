@csrf
@if ($category->exists)
    @method('PUT')
@endif

<div class="row g-3">
    <div class="col-md-6">
        <label for="section_id" class="form-label fw-semibold">Section <span class="text-danger">*</span></label>
        <select name="section_id" id="section_id" class="form-select @error('section_id') is-invalid @enderror" required>
            <option value="">Select section</option>
            @foreach ($sections as $sec)
                <option value="{{ $sec->id }}" @selected(old('section_id', $category->section_id) == $sec->id)>{{ $sec->name }}</option>
            @endforeach
        </select>
        @error('section_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="name" class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}" required maxlength="255">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @if ($category->exists)
            <div class="form-text">Slug: <code>{{ $category->slug }}</code> (unchanged when editing)</div>
        @endif
    </div>
    <div class="col-md-4">
        <label for="sort_order" class="form-label fw-semibold">Sort order <span class="text-danger">*</span></label>
        <input type="number" name="sort_order" id="sort_order" class="form-control @error('sort_order') is-invalid @enderror" value="{{ old('sort_order', $category->sort_order) }}" required min="0">
        @error('sort_order')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        @php
            $vis = old('is_visible');
            if ($vis === null) {
                $vis = $category->exists ? ($category->is_visible ? '1' : '0') : '1';
            }
            $vis = (string) $vis;
        @endphp
        <label for="is_visible" class="form-label fw-semibold">Visibility <span class="text-danger">*</span></label>
        <select name="is_visible" id="is_visible" class="form-select @error('is_visible') is-invalid @enderror" required>
            <option value="1" @selected($vis === '1')>Visible</option>
            <option value="0" @selected($vis === '0')>Hidden</option>
        </select>
        @error('is_visible')
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
    <a href="{{ route('admin.docs.categories.index') }}" class="btn btn-outline-secondary">Cancel</a>
</div>
