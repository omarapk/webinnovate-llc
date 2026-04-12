@extends('admin.layouts.app')

@section('title', 'New doc section')
@section('page_kicker', 'Documentation')
@section('page_title', 'New section')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.docs.sections.index') }}" class="text-decoration-none small"><i class="bi bi-arrow-left me-1"></i>Back to sections</a>
    </div>
    <div class="card border-0 shadow-sm rounded-3 p-4 p-md-5" style="max-width: 52rem;">
        <form action="{{ route('admin.docs.sections.store') }}" method="post">
            @include('admin.docs.sections._form', ['section' => $section])
        </form>
    </div>
@endsection
