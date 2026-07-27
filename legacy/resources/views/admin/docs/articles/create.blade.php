@extends('admin.layouts.app')

@section('title', 'New doc article')
@section('page_kicker', 'Documentation')
@section('page_title', 'New article')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.docs.articles.index') }}" class="text-decoration-none small"><i class="bi bi-arrow-left me-1"></i>Back to articles</a>
    </div>

    @if ($categories->isEmpty())
        <div class="alert alert-warning border-0 shadow-sm">
            You need at least one category before creating an article.
            <a href="{{ route('admin.docs.categories.create') }}" class="alert-link">Create a category</a>
        </div>
    @else
        <div class="card border-0 shadow-sm rounded-3 p-4 p-md-5">
            <form action="{{ route('admin.docs.articles.store') }}" method="post" enctype="multipart/form-data">
                @include('admin.docs.articles._form', ['article' => $article, 'categories' => $categories])
            </form>
        </div>
    @endif
@endsection
