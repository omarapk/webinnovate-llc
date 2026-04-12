@extends('admin.layouts.app')

@section('title', 'New doc category')
@section('page_kicker', 'Documentation')
@section('page_title', 'New category')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.docs.categories.index') }}" class="text-decoration-none small"><i class="bi bi-arrow-left me-1"></i>Back to categories</a>
    </div>

    @if ($sections->isEmpty())
        <div class="alert alert-warning border-0 shadow-sm">
            Create a section first.
            <a href="{{ route('admin.docs.sections.create') }}" class="alert-link">New section</a>
        </div>
    @else
        <div class="card border-0 shadow-sm rounded-3 p-4 p-md-5" style="max-width: 52rem;">
            <form action="{{ route('admin.docs.categories.store') }}" method="post">
                @include('admin.docs.categories._form', ['category' => $category, 'sections' => $sections])
            </form>
        </div>
    @endif
@endsection
