@php($blogMeta = $app['blog'])
<div class="rbt-rbt-blog-area rbt-section-gap5 bg-color-white" id="blog">
    <div class="container">
        <div class="section-title text-center mb--30">
            <span class="subtitle bg-primary-opacity">{{ $blogMeta['subtitle'] }}</span>
            <h2 class="title w-600">{{ $blogMeta['title'] }}</h2>
            <p class="description has-medium-font-size mt--20 mb-0">{{ $blogMeta['description'] }}</p>
        </div>

        @php($blogPosts = $blogPosts ?? collect())
        @if ($blogPosts->isEmpty())
            <div class="text-center">
                <p class="text-muted mb-0">No blog posts published yet. Check back soon.</p>
            </div>
        @else
            <div class="lf-blog-scroll-head mb--10">
                <div class="lf-blog-scroll-count" aria-live="polite">
                    <span id="lfBlogPos">1</span> <small>of</small> <span id="lfBlogTotal">{{ $blogPosts->count() }}</span>
                </div>

                <div class="lf-blog-scroll-nav d-none d-lg-flex" aria-label="Blog carousel navigation">
                    <button type="button" class="lf-blog-scroll-btn" aria-label="Scroll left" onclick="window.lfScrollBlogByOne && window.lfScrollBlogByOne(-1)">
                        <i class="feather-arrow-left" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="lf-blog-scroll-btn" aria-label="Scroll right" onclick="window.lfScrollBlogByOne && window.lfScrollBlogByOne(1)">
                        <i class="feather-arrow-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

            <div id="lfBlogTrack" class="lf-blog-scroll-track" role="region" aria-label="Blog posts">
                <script>
                    (function () {
                        function getStep(track) {
                            var first = track.querySelector('.lf-blog-scroll-item');
                            if (!first) return 0;
                            var styles = window.getComputedStyle(track);
                            var gap = parseFloat(styles.columnGap || styles.gap || '0') || 0;
                            return first.getBoundingClientRect().width + gap;
                        }

                        function init(track) {
                            if (!track || track.dataset.lfRecycleReady === '1') return;
                            var items = track.querySelectorAll('.lf-blog-scroll-item');
                            if (!items || items.length <= 1) return;
                            track.dataset.lfRecycleReady = '1';

                            var totalEl = document.getElementById('lfBlogTotal');
                            var posEl = document.getElementById('lfBlogPos');
                            var total = items.length;
                            if (totalEl) totalEl.textContent = String(total);
                            function clamp(n, min, max) { return Math.max(min, Math.min(max, n)); }

                            // Update the "1 of N" counter based on scroll position.
                            function updatePos() {
                                var step = getStep(track);
                                if (!step || total <= 0) {
                                    if (posEl) posEl.textContent = '1';
                                    return;
                                }
                                var idx = Math.round(track.scrollLeft / step);
                                idx = clamp(idx, 0, total - 1);
                                if (posEl) posEl.textContent = String(idx + 1);
                            }

                            track.addEventListener('scroll', function () {
                                requestAnimationFrame(updatePos);
                            }, { passive: true });

                            // Arrow buttons scroll by one card, but manual scrolling remains free.
                            window.lfScrollBlogByOne = function (dir) {
                                var step = getStep(track);
                                if (!step) return;
                                track.scrollBy({ left: step * (dir || 1), behavior: 'smooth' });
                            };

                            // Initial counter paint
                            updatePos();
                        }

                        if (document.readyState === 'loading') {
                            document.addEventListener('DOMContentLoaded', function () {
                                init(document.getElementById('lfBlogTrack'));
                            });
                        } else {
                            init(document.getElementById('lfBlogTrack'));
                        }
                    })();
                </script>
                @foreach ($blogPosts as $post)
                    <div class="lf-blog-scroll-item">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('apps.blog.show', ['app' => $app['slug'], 'slug' => $post->slug]) }}">
                                    @if ($post->featured_image)
                                        <img src="{{ $post->featured_image_url }}" alt="{{ filled($post->alt_text) ? $post->alt_text : $post->title }}" loading="lazy">
                                    @else
                                        <img src="{{ asset('assets/images/blog/blog-grid-01.jpg') }}" alt="{{ $post->title }}" loading="lazy">
                                    @endif
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="{{ route('apps.blog.show', ['app' => $app['slug'], 'slug' => $post->slug]) }}">{{ $post->title }}</a></h5>
                                @if ($post->author_name)
                                    <p class="small text-muted mb-2 mb--10">By {{ $post->author_name }}</p>
                                @endif
                                @if ($post->excerpt)
                                    <p class="rbt-card-text">{{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt), 120) }}</p>
                                @endif
                                <div class="rbt-card-bottom">
                                    <a class="rbt-btn-link" href="{{ route('apps.blog.show', ['app' => $app['slug'], 'slug' => $post->slug]) }}">Read article<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt--30">
                <a class="rbt-btn-link" href="{{ route('apps.blog.index', ['app' => $app['slug']]) }}">View all articles<i class="feather-arrow-right"></i></a>
            </div>
        @endif
    </div>
</div>
