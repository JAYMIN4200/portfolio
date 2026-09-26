@extends('layouts.frontend')

@section('title', 'Blog')

@section('meta_description', 'Articles, tutorials and insights from my experience in web development.')

@php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']);
@endphp

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        <div class="pointer-events-none absolute -top-32 left-1/3 w-[30rem] h-[30rem] rounded-full bg-indigo-500/15 blur-3xl" data-parallax="0.06" aria-hidden="true"></div>

        <x-frontend.section-header
            badge="Blog"
            title="Articles & insights"
            subtitle="Tutorials, tips and stories from my journey as a developer."
        />

        @if ($posts->isEmpty())
            <div class="text-center py-20" data-reveal="up">
                <p class="text-slate-500">No articles published yet. Check back soon!</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-stagger data-stagger-step="100">
                @foreach ($posts as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="group glass-card rounded-2xl overflow-hidden transition-all hover:border-primary-500/40 hover:-translate-y-1 hover:bg-white/5 tilt-card">
                        <div class="aspect-video overflow-hidden">
                            @if ($postImageUrl = $post->imageUrl())
                                <img src="{{ $postImageUrl }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <img src="{{ asset('images/default-profile.svg') }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                            @endif
                        </div>
                        <div class="p-6">
                            @if ($post->published_at)
                                <p class="text-xs text-slate-500 uppercase tracking-wider mb-2">{{ $post->published_at->format('M j, Y') }}</p>
                            @endif
                            <h2 class="text-lg font-semibold text-white mb-2 line-clamp-2">{{ $post->title }}</h2>
                            @if ($post->excerpt)
                                <p class="text-sm text-slate-400 line-clamp-3">{{ $post->excerpt }}</p>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-12">
                <x-pagination :paginator="$posts" />
            </div>
        @endif
    </section>

@endsection