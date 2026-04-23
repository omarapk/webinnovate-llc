@if ($results->isEmpty())
    <p class="text-muted py-3">No results found for <strong>{{ e($query) }}</strong></p>
@else
    <div class="border rounded-3 bg-white px-3 px-md-4">
        @foreach ($results as $art)
            <div class="docs-article-row">
                <div class="d-flex flex-wrap align-items-start justify-content-between gap-2">
                    <a href="{{ route('docs.show', $art->slug) }}" class="title d-block mb-0">{{ $art->title }}</a>
                </div>
                @if ($art->excerpt)
                    <p class="small text-muted mb-0 mt-1">{{ \Illuminate\Support\Str::limit(strip_tags($art->excerpt), 140) }}</p>
                @endif
                @if ($art->category)
                    <span class="small text-muted">{{ $art->category->name }}</span>
                @endif
            </div>
        @endforeach
    </div>
@endif
