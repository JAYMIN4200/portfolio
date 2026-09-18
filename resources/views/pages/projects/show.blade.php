@extends('layouts.frontend')

@section('title', $project->title)

@section('meta_description', $project->description)

@php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords']);
@endphp

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-20">
        <nav class="mb-8 text-sm text-slate-500">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ route('projects.index') }}" class="hover:text-white transition-colors">Projects</a>
            <span class="mx-2">/</span>
            <span class="text-slate-300">{{ $project->title }}</span>
        </nav>

        <div class="mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">{{ $project->title }}</h1>
            <div class="flex flex-wrap items-center gap-3 mt-4">
                @if ($project->technologies)
                    @foreach ($project->technologies as $tech)
                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-primary-500/10 text-primary-400 border border-primary-500/20">{{ $tech }}</span>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <div class="lg:col-span-2">
                <div class="rounded-2xl overflow-hidden border border-white/10 mb-8">
                    @if ($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full object-cover">
                    @else
                        <div class="w-full aspect-video bg-gradient-to-br from-slate-800 via-slate-900 to-primary-900/50 flex items-center justify-center">
                            <svg class="w-24 h-24 text-white/10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                    @endif
                </div>

                <div class="prose prose-invert max-w-none">
                    <h2 class="text-2xl font-bold text-white mb-4">About This Project</h2>
                    <p class="text-slate-400 leading-relaxed">{{ $project->long_description ?? $project->description }}</p>
                </div>
            </div>

            <div class="space-y-6">
                <div class="glass-card rounded-xl p-6">
                    <h3 class="text-white font-semibold mb-4">Project Details</h3>
                    <dl class="space-y-4 text-sm">
                        <div>
                            <dt class="text-slate-500 uppercase tracking-wider text-xs mb-1">Status</dt>
                            <dd class="inline-flex items-center gap-2 text-white font-medium">
                                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                {{ $project->is_featured ? 'Featured' : 'Complete' }}
                            </dd>
                        </div>
                        @if ($project->technologies)
                        <div>
                            <dt class="text-slate-500 uppercase tracking-wider text-xs mb-2">Technologies</dt>
                            <dd class="flex flex-wrap gap-2">
                                @foreach ($project->technologies as $tech)
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-white/5 text-slate-300">{{ $tech }}</span>
                                @endforeach
                            </dd>
                        </div>
                        @endif
                        <div>
                            <dt class="text-slate-500 uppercase tracking-wider text-xs mb-1">Created</dt>
                            <dd class="text-white font-medium">{{ $project->created_at->format('F Y') }}</dd>
                        </div>
                    </dl>
                </div>

                @if ($project->live_url || $project->github_url)
                <div class="glass-card rounded-xl p-6">
                    <h3 class="text-white font-semibold mb-4">Links</h3>
                    <div class="space-y-3">
                        @if ($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank" rel="noopener" class="flex items-center justify-between p-4 rounded-lg bg-primary-500/10 border border-primary-500/20 hover:bg-primary-500/20 transition-colors group">
                                <span class="flex items-center gap-3 text-white font-medium">
                                    <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    Live Demo
                                </span>
                                <svg class="w-4 h-4 text-slate-500 group-hover:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </a>
                        @endif
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" rel="noopener" class="flex items-center justify-between p-4 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 transition-colors group">
                                <span class="flex items-center gap-3 text-white font-medium">
                                    <svg class="w-5 h-5 text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                                    Source Code
                                </span>
                                <svg class="w-4 h-4 text-slate-500 group-hover:text-slate-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </a>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

    @if ($relatedProjects->isNotEmpty())
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
        <x-frontend.section-header
            badge="More"
            title="Related projects"
            align="left"
        />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($relatedProjects as $related)
                <x-frontend.project-card :project="$related" />
            @endforeach
        </div>
    </section>
    @endif

@endsection