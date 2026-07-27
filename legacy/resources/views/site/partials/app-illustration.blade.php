{{--
| App card illustration
|--------------------------------------------------------------------------
| A small, app-specific UI mock shown at the top of each portfolio card.
| Expects: $app (an AppCatalog entry).
--}}
@php
    $from = $app['accent']['from'];
    $to = $app['accent']['to'];
@endphp

<div class="relative h-44 overflow-hidden rounded-lg border border-border"
     style="background: linear-gradient(160deg, {{ $from }}12, {{ $to }}08 55%, transparent);">

    <div class="bg-dots pointer-events-none absolute inset-0 opacity-60" aria-hidden="true"></div>

    @switch ($app['slug'])

        {{-- LeadForm: the one-page cash-on-delivery form --}}
        @case ('leadform')
            <div class="absolute inset-x-6 top-6 rounded-lg border border-border bg-card p-3 shadow-sm transition-transform duration-500 group-hover:-translate-y-1">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-semibold uppercase tracking-wider text-muted-foreground">Order form</span>
                    <span class="rounded-full px-1.5 py-0.5 text-[9px] font-semibold text-white" style="background: {{ $to }};">COD</span>
                </div>
                <div class="mt-2.5 space-y-1.5">
                    <div class="h-5 rounded border border-border"></div>
                    <div class="h-5 rounded border border-border"></div>
                    <div class="grid grid-cols-3 gap-1.5">
                        <div class="h-5 rounded border border-border"></div>
                        <div class="h-5 rounded" style="background: linear-gradient(135deg, {{ $from }}, {{ $to }});"></div>
                        <div class="h-5 rounded border border-border"></div>
                    </div>
                </div>
                <div class="mt-2.5 flex h-7 items-center justify-center rounded text-[10px] font-semibold text-white"
                     style="background: linear-gradient(135deg, {{ $from }}, {{ $to }});">
                    Complete order
                </div>
            </div>
            @break

        {{-- Landing Page Builder: prompt in, generated page out --}}
        @case ('landing-page-builder')
            <div class="absolute inset-x-6 top-5 flex items-center gap-2 rounded-lg border border-border bg-card px-2.5 py-2 shadow-sm">
                <svg class="size-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: {{ $to }};" aria-hidden="true">
                    <path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M18.4 5.6l-2.8 2.8M8.4 15.6l-2.8 2.8"/>
                </svg>
                <span class="truncate text-[10px] text-muted-foreground">aliexpress.com/item/beauty-oil…</span>
                <span class="ml-auto rounded px-1.5 py-0.5 text-[9px] font-semibold text-white" style="background: linear-gradient(135deg, {{ $from }}, {{ $to }});">Generate</span>
            </div>

            <div class="absolute inset-x-6 top-[4.75rem] grid grid-cols-2 gap-2">
                @foreach (['A', 'B'] as $variant)
                    <div class="rounded-lg border border-border bg-card p-2 shadow-sm transition-transform duration-500 {{ $variant === 'A' ? 'group-hover:-translate-y-1' : 'group-hover:-translate-y-2' }}">
                        <div class="flex items-center justify-between">
                            <span class="text-[9px] font-semibold text-muted-foreground">Variant {{ $variant }}</span>
                            <span class="text-[9px] font-semibold" style="color: {{ $to }};">{{ $variant === 'A' ? '1.4%' : '3.1%' }}</span>
                        </div>
                        <div class="mt-1.5 h-6 rounded" style="background: linear-gradient(135deg, {{ $from }}25, {{ $to }}20);"></div>
                        <div class="mt-1 h-1.5 w-3/4 rounded-full bg-border"></div>
                        <div class="mt-1 h-1.5 w-1/2 rounded-full bg-border"></div>
                    </div>
                @endforeach
            </div>
            @break

        {{-- OrderSheet: orders landing in a spreadsheet --}}
        @case ('ordersheet')
            <div class="absolute inset-x-6 top-6 overflow-hidden rounded-lg border border-border bg-card shadow-sm transition-transform duration-500 group-hover:-translate-y-1">
                <div class="flex items-center gap-1.5 border-b border-border px-2.5 py-1.5" style="background: {{ $from }}0f;">
                    <span class="size-2 rounded-sm" style="background: {{ $to }};"></span>
                    <span class="text-[9px] font-semibold text-muted-foreground">Orders — July</span>
                </div>
                <table class="w-full table-fixed">
                    <tbody>
                        @foreach ([['#1048', 'Sara B.', '$44.00'], ['#1047', 'Youssef A.', '$24.90'], ['#1046', 'Amina K.', '$59.00']] as $i => $row)
                            <tr class="border-b border-border last:border-0">
                                @foreach ($row as $cell)
                                    <td class="truncate px-2.5 py-[7px] text-[9px] {{ $loop->first ? 'font-mono text-muted-foreground' : '' }} {{ $loop->last ? 'text-right font-semibold tabular-nums' : '' }}">{{ $cell }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 items-center gap-1.5 rounded-full border border-border bg-card px-2.5 py-1 text-[9px] font-medium shadow-sm">
                <span class="relative flex size-1.5">
                    <span class="animate-ping-soft absolute inline-flex size-full rounded-full" style="background: {{ $to }};"></span>
                    <span class="relative inline-flex size-1.5 rounded-full" style="background: {{ $to }};"></span>
                </span>
                Synced in real time
            </div>
            @break

    @endswitch
</div>
