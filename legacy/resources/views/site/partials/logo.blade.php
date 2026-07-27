{{--
| WebInnovate logo lockup
|--------------------------------------------------------------------------
| The brand mark is a raster with a transparent background (cut out from the
| supplied artwork); the wordmark stays as live Geist text so it renders
| crisply at every size and inherits the section's foreground colour.
|
| Optional: $class (extra classes on the link).
--}}
<a href="{{ url('/') }}" class="flex items-center gap-2.5 {{ $class ?? '' }}" aria-label="{{ config('site.brand') }} home">
    <img src="{{ asset('assets/images/brand/webinnovate/mark-transparent.png') }}"
         alt="" aria-hidden="true" width="36" height="36"
         class="size-9 shrink-0 object-contain">
    <span class="text-[15px] font-semibold tracking-tight">{{ config('site.brand') }}</span>
</a>
