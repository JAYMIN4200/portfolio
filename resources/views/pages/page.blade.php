@extends('layouts.frontend')

@section('title', $page->title)

@php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']);
@endphp

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        <div class="max-w-3xl mx-auto">
            <div class="flex items-center gap-3 mb-6" data-reveal="up">
                <span class="inline-flex w-11 h-11 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 items-center justify-center shadow-lg shadow-indigo-500/30">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </span>
                <h1 class="text-3xl md:text-4xl font-bold text-white tracking-tight">{{ $page->title }}</h1>
            </div>
            <p class="text-sm text-slate-500 mb-12">Last updated: {{ $page->updated_at->format('F j, Y') }}</p>

            <div class="space-y-8" data-stagger>
                @php
                    $blocks = preg_split('/\n\s*\n/', trim($page->content));
                @endphp
                @foreach ($blocks as $block)
                    @php
                        $isHeading = preg_match('/^(#{1,3})\s+(.+)$/m', $block, $m);
                        $firstLine = strtok($block, "\n");
                        $isShortTitle = preg_match('/^\d+[.)]?\s+.+$/', $firstLine);
                    @endphp
                    @if ($isHeading)
                        @php $heading = trim(preg_replace('/^(#{1,3})\s+/', '', $block)); @endphp
                        <div>
                            <h2 class="text-xl font-semibold text-white mb-4 flex items-center gap-3">
                                <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-indigo-500 to-purple-600"></span>
                                {{ $heading }}
                            </h2>
                        </div>
                    @elseif ($isShortTitle)
                        @php
                            $lines = preg_split('/\R/', trim($block));
                            $title = array_shift($lines);
                        @endphp
                        <div class="glass-card rounded-xl p-6">
                            <h3 class="text-white font-semibold mb-3">{{ $title }}</h3>
                            <div class="text-slate-400 leading-relaxed whitespace-pre-line">
                                {{ implode("\n", $lines) }}
                            </div>
                        </div>
                    @else
                        <div class="text-slate-400 leading-relaxed whitespace-pre-line">
                            {{ $block }}
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="mt-14 flex items-center justify-between gap-4 p-5 rounded-xl border border-white/10 bg-white/5" data-reveal="zoom">
                <p class="text-sm text-slate-400">Questions about these terms?</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white text-sm font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 transition-all shrink-0">
                    Contact Me
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
                </a>
            </div>
        </div>
    </section>

@endsection