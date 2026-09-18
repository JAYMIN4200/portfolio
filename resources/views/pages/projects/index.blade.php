@extends('layouts.frontend')

@section('title', 'Projects')

@section('meta_description', 'Browse my portfolio of projects, including web applications, websites and more.')

@php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords']);
@endphp

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-16">
        <div class="text-center mb-16">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-4">Portfolio</span>
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">My Projects</h1>
            <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto">A collection of projects I've built, ranging from web applications to open source tools.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($projects as $project)
                <x-frontend.project-card :project="$project" />
            @empty
                <div class="col-span-full text-center py-20">
                    <p class="text-slate-400">No projects to display yet. Check back soon!</p>
                </div>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $projects->links() }}
        </div>
    </section>

@endsection