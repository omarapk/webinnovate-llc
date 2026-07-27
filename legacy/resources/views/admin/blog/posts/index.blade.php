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

    {{--
        Filters (commented out per request)
        <div class="card border-0 shadow-sm rounded-3 p-3 p-md-4 mb-4">
            <form method="get" action="{{ route('admin.blog.posts.index') }}" class="row g-2 align-items-end">
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
    --}}

    <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">Title</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-2">
                                    @if ($post->featured_image_url)
                                        <img
                                            src="{{ $post->featured_image_url }}"
                                            alt=""
                                            class="rounded border"
                                            style="width: 44px; height: 32px; object-fit: cover;"
                                            loading="lazy"
                                        >
                                    @endif
                                    <span class="fw-medium">{{ \Illuminate\Support\Str::limit($post->title, 70) }}</span>
                                </div>
                            </td>
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
                                <div class="d-inline-flex align-items-center justify-content-end gap-2 flex-nowrap">
                                    <a href="{{ route('admin.blog.posts.edit', $post) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.blog.posts.destroy', $post) }}" method="post" class="d-inline js-confirm-delete" data-confirm-title="Delete post?" data-confirm-message="This will permanently delete this post.">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                    <form action="{{ route('admin.blog.posts.toggle', $post) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <label class="switch" title="Toggle draft / published">
                                            <input
                                                type="checkbox"
                                                @checked($post->status === 'published')
                                                onchange="this.form.submit()"
                                                aria-label="Toggle draft / published"
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-5">No posts found.</td>
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
