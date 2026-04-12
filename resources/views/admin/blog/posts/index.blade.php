@extends('admin.layouts.app')

@section('title', 'Blog posts')
@section('page_kicker', 'Blog')
@section('page_title', 'Posts')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
        <p class="text-muted mb-0">Create and manage blog posts.</p>
        <a href="{{ route('admin.blog.posts.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> New post
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-3 p-3 p-md-4 mb-4">
        <form method="get" action="{{ route('admin.blog.posts.index') }}" class="row g-2 align-items-end">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <label for="filter_category" class="form-label small fw-semibold text-muted mb-1">Category</label>
                <select name="category_id" id="filter_category" class="form-select form-select-sm">
                    <option value="">All categories</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" @selected(request('category_id') == $cat->id)>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <label for="filter_status" class="form-label small fw-semibold text-muted mb-1">Status</label>
                <select name="status" id="filter_status" class="form-select form-select-sm">
                    <option value="">All statuses</option>
                    <option value="draft" @selected(request('status') === 'draft')>Draft</option>
                    <option value="published" @selected(request('status') === 'published')>Published</option>
                </select>
            </div>
            <div class="col-auto d-flex gap-2">
                <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                <a href="{{ route('admin.blog.posts.index') }}" class="btn btn-sm btn-outline-secondary">Reset</a>
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
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td class="ps-4">
                                <span class="fw-medium">{{ \Illuminate\Support\Str::limit($post->title, 70) }}</span>
                            </td>
                            <td>{{ $post->category?->name ?? '—' }}</td>
                            <td>
                                @if ($post->status === 'published')
                                    <span class="badge rounded-pill bg-success-subtle text-success-emphasis border border-success-subtle">Published</span>
                                @else
                                    <span class="badge rounded-pill bg-warning-subtle text-warning-emphasis border border-warning-subtle">Draft</span>
                                @endif
                            </td>
                            <td class="text-muted small">
                                {{ $post->published_at?->format('M j, Y g:i A') ?? '—' }}
                            </td>
                            <td class="text-end pe-4">
                                <div class="d-flex flex-wrap justify-content-end gap-1">
                                    <a href="{{ route('admin.blog.posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{ route('admin.blog.posts.toggle', $post) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm btn-outline-secondary" title="Toggle draft / published">Toggle</button>
                                    </form>
                                    <form action="{{ route('admin.blog.posts.destroy', $post) }}" method="post" class="d-inline" onsubmit="return confirm('Delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-5">No posts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($posts->hasPages())
            <div class="card-footer bg-white border-top py-3">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
@endsection
