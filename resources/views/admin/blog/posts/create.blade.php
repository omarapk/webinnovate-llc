@extends('admin.layouts.app')

@section('title', 'New blog post')
@section('page_kicker', 'Blog')
@section('page_title', 'New post')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.blog.posts.index') }}" class="text-decoration-none small"><i class="bi bi-arrow-left me-1"></i>Back to posts</a>
    </div>

    <div class="card border-0 shadow-sm rounded-3 p-4 p-md-5">
        <form action="{{ route('admin.blog.posts.store') }}" method="post" enctype="multipart/form-data">
            @include('admin.blog.posts._form', ['post' => $post])
        </form>
    </div>
@endsection
