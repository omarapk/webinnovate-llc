@extends('admin.layouts.app')

@section('title', 'New category')
@section('page_kicker', 'Blog')
@section('page_title', 'New category')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.blog.categories.index') }}" class="text-decoration-none small"><i class="bi bi-arrow-left me-1"></i>Back to categories</a>
    </div>
    <div class="card border-0 shadow-sm rounded-3 p-4 p-md-5" style="max-width: 52rem;">
        <form action="{{ route('admin.blog.categories.store') }}" method="post">
            @include('admin.blog.categories._form', ['category' => $category])
        </form>
    </div>
@endsection
