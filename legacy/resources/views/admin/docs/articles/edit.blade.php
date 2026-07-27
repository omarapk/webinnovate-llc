@extends('admin.layouts.app')

@section('title', 'Edit doc article')
@section('page_kicker', 'Documentation')
@section('page_title', 'Edit article')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.docs.articles.index') }}" class="text-decoration-none small"><i class="bi bi-arrow-left me-1"></i>Back to articles</a>
    </div>
    <div class="card border-0 shadow-sm rounded-3 p-4 p-md-5">
        <form action="{{ route('admin.docs.articles.update', $article) }}" method="post" enctype="multipart/form-data">
            @include('admin.docs.articles._form', ['article' => $article, 'categories' => $categories])
        </form>
    </div>
@endsection
