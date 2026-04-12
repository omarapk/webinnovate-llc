@extends('admin.layouts.app')

@section('title', 'Doc sections')
@section('page_kicker', 'Documentation')
@section('page_title', 'Sections')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-4">
        <p class="text-muted mb-0">Top-level documentation groups. Slugs are generated from the name.</p>
        <a href="{{ route('admin.docs.sections.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> New section
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
                        <th class="text-center">Categories</th>
                        <th class="text-end">Sort</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sections as $section)
                        <tr>
                            <td class="ps-4 fw-medium">{{ $section->name }}</td>
                            <td><code class="small">{{ $section->slug }}</code></td>
                            <td class="text-center">
                                @if ($section->is_visible)
                                    <span class="badge rounded-pill bg-success-subtle text-success-emphasis border border-success-subtle">Yes</span>
                                @else
                                    <span class="badge rounded-pill bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">No</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <span class="badge rounded-pill bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">{{ $section->categories_count }}</span>
                            </td>
                            <td class="text-end text-muted">{{ $section->sort_order }}</td>
                            <td class="text-end pe-4">
                                <a href="{{ route('admin.docs.sections.edit', $section) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.docs.sections.destroy', $section) }}" method="post" class="d-inline" onsubmit="return confirm('Delete this section?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" @disabled($section->categories_count > 0)>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-5">No sections yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
