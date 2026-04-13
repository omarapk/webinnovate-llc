@extends('admin.layouts.app')

@section('title', 'Doc articles')
@section('page_kicker', 'Documentation')
@section('page_title', 'Articles')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
        <p class="text-muted mb-0">Manage documentation articles.</p>
        <a href="{{ route('admin.docs.articles.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> New article
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-3 p-3 p-md-4 mb-4">
        <form method="get" action="{{ route('admin.docs.articles.index') }}" class="row g-2 align-items-end">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <label for="filter_category" class="form-label small fw-semibold text-muted mb-1">Category</label>
                <select name="category_id" id="filter_category" class="form-select form-select-sm">
                    <option value="">All categories</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" @selected(request('category_id') == $cat->id)>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <label for="filter_status" class="form-label small fw-semibold text-muted mb-1">Status</label>
                <select name="status" id="filter_status" class="form-select form-select-sm">
                    <option value="">All statuses</option>
                    <option value="draft" @selected(request('status') === 'draft')>Draft</option>
                    <option value="published" @selected(request('status') === 'published')>Published</option>
                </select>
            </div>
            <div class="col-auto d-flex gap-2">
                <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                <a href="{{ route('admin.docs.articles.index') }}" class="btn btn-sm btn-outline-secondary">Reset</a>
            </div>
        </form>
    </div>

    <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th class="text-end">Sort</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($articles as $article)
                        <tr>
                            <td class="ps-4 fw-medium">{{ \Illuminate\Support\Str::limit($article->title, 56) }}</td>
                            <td>{{ $article->category?->name ?? '—' }}</td>
                            <td>
                                @if ($article->status === 'published')
                                    <span class="badge rounded-pill bg-success-subtle text-success-emphasis border border-success-subtle">Published</span>
                                @else
                                    <span class="badge rounded-pill bg-warning-subtle text-warning-emphasis border border-warning-subtle">Draft</span>
                                @endif
                            </td>
                            <td class="text-muted small">{{ $article->published_at?->format('M j, Y g:i A') ?? '—' }}</td>
                            <td class="text-end text-muted">{{ $article->sort_order }}</td>
                            <td class="text-end pe-4">
                                <div class="d-flex flex-wrap justify-content-end gap-1">
                                    <a href="{{ route('admin.docs.articles.edit', $article) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{ route('admin.docs.articles.toggle', $article) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Toggle</button>
                                    </form>
                                    <form action="{{ route('admin.docs.articles.destroy', $article) }}" method="post" class="d-inline" onsubmit="return confirm('Delete this article?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-5">No articles found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($articles->hasPages())
            <div class="card-footer bg-white border-top py-3">
                {{ $articles->links() }}
            </div>
        @endif
    </div>
@endsection
