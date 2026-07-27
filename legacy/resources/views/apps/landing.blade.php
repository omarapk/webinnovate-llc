{{--
    Shared app landing template.
    Renders any WEBI app from its data file in config/apps/{slug}.php.
    Adding a new app = adding one data file + registering the slug in config/site.php.
--}}
<!DOCTYPE html>
<html lang="en">
@include('apps.partials.head')
<body class="rbt-header-sticky">
    <script src="https://unpkg.com/feather-icons"></script>

    @include('apps.partials.header')

    <main class="rbt-main-wrapper">
        @include('apps.partials.hero')
        @include('apps.partials.trust-logos')
        @include('apps.partials.demo')
        @include('apps.partials.stats')
        @include('apps.partials.feature-grid')
        @include('apps.partials.testimonials')
        @include('apps.partials.faq')
        @include('apps.partials.pricing')
        @include('apps.partials.affiliate')
        @include('apps.partials.blog-grid')
        @include('apps.partials.footer')
    </main>

    @include('apps.partials.scripts')
</body>
</html>
