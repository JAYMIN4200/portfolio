@extends('layouts.frontend')

@section('title', $post->title)

@php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']);
@endphp

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        <article class="max-w-3xl mx-auto">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-slate-400 hover:text-white transition-colors mb-8">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                Back to Blog
            </a>

            @if ($post->published_at)
                <p class="text-sm text-slate-500 uppercase tracking-wider mb-3">{{ $post->published_at->format('M j, Y') }}</p>
            @endif
            <h1 class="text-3xl md:text-4xl font-bold text-white tracking-tight mb-6" data-reveal="up">{{ $post->title }}</h1>

            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full rounded-2xl border border-white/10 mb-8">
            @else
                <img src="https://picsum.photos/seed/{{ $post->slug }}/1200/675" alt="{{ $post->title }}" class="w-full rounded-2xl border border-white/10 mb-8">
            @endif

            <div class="prose prose-invert max-w-none text-slate-300 leading-relaxed whitespace-pre-line" id="postContent">@if (Str::contains($post->content, '</')){!! $post->content !!}@else{{ $post->content }}@endif</div>
        </article>

        @if ($related->isNotEmpty())
            <div class="max-w-3xl mx-auto mt-20 pt-12 border-t border-white/10">
                <h2 class="text-2xl font-bold text-white mb-8">Related articles</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6" data-stagger>
                    @foreach ($related as $relatedPost)
                        <a href="{{ route('blog.show', $relatedPost->slug) }}" class="glass-card rounded-xl p-5 transition-all hover:border-primary-500/40 hover:-translate-y-0.5 hover:bg-white/5">
                            <h3 class="text-white font-semibold mb-1 line-clamp-2">{{ $relatedPost->title }}</h3>
                            @if ($relatedPost->excerpt)
                                <p class="text-sm text-slate-400 line-clamp-2">{{ $relatedPost->excerpt }}</p>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </section>

@endsection