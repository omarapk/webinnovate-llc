@extends('public.layouts.app')

@section('title', $app['name'].' Blog — Tips, Guides & Best Practices')
@section('meta_description', $app['blog']['description'].' Articles from the '.$app['name'].' team at WebInnovate.')

@section('og_title', $app['name'].' Blog')

@push('head')
    <link rel="canonical" href="{{ route('apps.blog.index', ['app' => $app['slug']]) }}">
@endpush

@section('content')
    <div class="container py-4 py-lg-5">
        <header class="text-center mb-5">
            <p class="text-uppercase fw-semibold small mb-2" style="letter-spacing: .08em; color: #c20c81;">{{ $app['blog']['subtitle'] }}</p>
            <h1 class="display-6 fw-bold">{{ $app['blog']['title'] }}</h1>
            <p class="text-muted mx-auto" style="max-width: 640px;">{{ $app['blog']['description'] }}</p>
        </header>

        @if ($posts->isEmpty())
            <div class="pub-card p-5 text-center mx-auto" style="max-width: 560px;">
                <h2 class="h5 fw-semibold mb-2">No articles yet</h2>
                <p class="text-muted mb-4">We're working on our first {{ $app['display_name'] }} articles. In the meantime, explore the app.</p>
                <a href="{{ url('/'.$app['slug']) }}" class="btn btn-dark px-4">Discover {{ $app['display_name'] }}</a>
            </div>
        @else
            <div class="row g-4">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-lg-4">
                        <article class="pub-card h-100 overflow-hidden d-flex flex-column">
                            <a href="{{ route('apps.blog.show', ['app' => $app['slug'], 'slug' => $post->slug]) }}" class="d-block">
                                @if ($post->featured_image)
                                    <img src="{{ $post->featured_image_url }}" alt="{{ filled($post->alt_text) ? $post->alt_text : $post->title }}" class="w-100 object-fit-cover" style="height: 200px;" loading="lazy">
                                @else
                                    <img src="{{ asset('assets/images/blog/blog-grid-01.jpg') }}" alt="{{ $post->title }}" class="w-100 object-fit-cover" style="height: 200px;" loading="lazy">
                                @endif
                            </a>
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <h2 class="h5 fw-semibold">
                                    <a href="{{ route('apps.blog.show', ['app' => $app['slug'], 'slug' => $post->slug]) }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                                </h2>
                                <div class="small text-muted mb-2">
                                    @if ($post->author_name)<span>By {{ $post->author_name }} · </span>@endif
                                    <time datetime="{{ $post->published_at?->toIso8601String() }}">{{ $post->published_at?->format('F j, Y') ?? $post->created_at->format('F j, Y') }}</time>
                                </div>
                                @if ($post->excerpt)
                                    <p class="text-muted small flex-grow-1">{{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt), 140) }}</p>
                                @endif
                                <a href="{{ route('apps.blog.show', ['app' => $app['slug'], 'slug' => $post->slug]) }}" class="fw-semibold small text-decoration-none mt-auto" style="color: #c20c81;">Read article →</a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
@endsection
