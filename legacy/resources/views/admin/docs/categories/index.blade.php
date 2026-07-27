@extends('admin.layouts.app')

@section('title', 'Doc categories')
@section('page_kicker', 'Documentation')
@section('page_title', 'Categories')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-4">
        <p class="text-muted mb-0">Slugs are generated from the name.</p>
        <a href="{{ route('admin.docs.categories.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> New category
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">Name</th>
                        <th>Slug</th>
                        <th class="text-center">Visible</th>
                        <th class="text-center">Articles</th>
                        <th class="text-end">Sort</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td class="ps-4 fw-medium">{{ $category->name }}</td>
                            <td>{{ $category->section?->name ?? '—' }}</td>
                            <td><code class="small">{{ $category->slug }}</code></td>
                            <td class="text-center">
                                @if ($category->is_visible)
                                    <span class="badge rounded-pill bg-success-subtle text-success-emphasis border border-success-subtle">Yes</span>
                                @else
                                    <span class="badge rounded-pill bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">No</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <span class="badge rounded-pill bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">{{ $category->articles_count }}</span>
                            </td>
                            <td class="text-end text-muted">{{ $category->sort_order }}</td>
                            <td class="text-end pe-4">
                                <a href="{{ route('admin.docs.categories.edit', $category) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.docs.categories.destroy', $category) }}" method="post" class="d-inline js-confirm-delete" data-confirm-title="Delete category?" data-confirm-message="This will permanently delete this category.">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" @disabled($category->articles_count > 0)>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-5">No categories yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
