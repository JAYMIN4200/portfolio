@extends('layouts.frontend')

@section('title', 'About')

@section('meta_description', 'Learn more about me, my background, skills, and what I do.')

@php
    $profile = App\Models\Profile::with('user')->first();
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']);
@endphp

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-16">
        <div class="text-center mb-16" data-reveal>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-4">About Me</span>
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">Get to know me better</h1>
            <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto">My story, my skills, and what I bring to the table.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start" data-stagger>
            <div>
                <div class="relative mb-8">
                    <div class="absolute -inset-4 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl opacity-10 blur-2xl"></div>
                    <div class="relative rounded-2xl overflow-hidden border border-white/10 aspect-4/3">
                        @if ($profile && $profile->about_image)
                            <img src="{{ asset('storage/' . $profile->about_image) }}" alt="{{ $profile->user->name }}" class="w-full h-full object-cover">
                        @elseif ($profile && $profile->avatar)
                            <img src="{{ asset('storage/' . $profile->avatar) }}" alt="{{ $profile->user->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-slate-800 to-slate-900 flex items-center justify-center">
                                <span class="text-9xl text-white/10 font-bold">{{ strtoupper(substr($profile->user->name ?? 'D', 0, 1)) }}</span>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4" data-stagger>
                    <div class="glass-card rounded-xl p-5 text-center">
                        <p class="text-3xl font-bold gradient-text">{{ $projectCount ?? '7+' }}</p>
                        <p class="text-sm text-slate-400 mt-1">Projects Done</p>
                    </div>
                    <div class="glass-card rounded-xl p-5 text-center">
                        <p class="text-3xl font-bold gradient-text">{{ $skillCount ?? '20+' }}</p>
                        <p class="text-sm text-slate-400 mt-1">Technologies</p>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">A bit about who I am</h2>
                <div class="space-y-4 text-slate-400 leading-relaxed">
                    <p>{{ $profile->bio ?? '' }}</p>
                </div>

                @if ($profile)
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8" data-stagger>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Name</p>
                        <p class="text-white font-medium">{{ $profile->user->name ?? '—' }}</p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Email</p>
                        <a href="mailto:{{ $profile->user->email ?? '#' }}" class="text-white font-medium break-all hover:text-indigo-300 transition-colors">{{ $profile->user->email ?? '—' }}</a>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Location</p>
                        <p class="text-white font-medium">{{ $profile->location ?? '—' }}</p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Status</p>
                        <p class="inline-flex items-center gap-2 text-white font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Available
                        </p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Role</p>
                        <p class="text-white font-medium">{{ $profile->title ?? 'Developer' }}</p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Website</p>
                        @if ($profile->website)
                            <a href="{{ $profile->website }}" target="_blank" rel="noopener" class="text-white font-medium break-all hover:text-indigo-300 transition-colors">{{ $profile->website }}</a>
                        @else
                            <p class="text-white font-medium">—</p>
                        @endif
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Freelance</p>
                        <p class="text-white font-medium">Available</p>
                    </div>
                </div>
                @endif

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                        Let's Work Together
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
                    </a>
                    @if ($profile && $profile->resume_path)
                        <a href="{{ route('resume.download') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-white/10 text-white font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            Download Resume
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <x-frontend.divider />

    @if ($skills->isNotEmpty())
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <x-frontend.section-header
            badge="My Skills"
            title="Skills & proficiency"
            subtitle="A detailed breakdown of the technologies I use and my proficiency levels."
        />

        <div class="space-y-10">
            @foreach ($skills as $category => $categorySkills)
                <div>
                    <h3 data-reveal="up" class="text-white font-semibold text-xl mb-5 flex items-center gap-2">
                        <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-indigo-500 to-purple-600"></span>
                        {{ ucfirst(str_replace('-', ' ', $category)) }}
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" data-stagger>
                        @foreach ($categorySkills as $skill)
                            <x-frontend.skill-bar :skill="$skill" />
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    <x-frontend.divider />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="glass-card rounded-2xl p-8 sm:p-12 text-center relative overflow-hidden" data-reveal="zoom">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-96 h-56 bg-indigo-600/20 rounded-full blur-3xl"></div>
            <h2 class="relative text-2xl md:text-3xl font-bold text-white mb-4">Have an idea? Let's bring it to life.</h2>
            <p class="relative text-slate-400 max-w-xl mx-auto mb-8">I'm always looking for new and exciting projects to work on. If you have something in mind, don't hesitate to reach out.</p>
            <a href="{{ route('contact') }}" class="relative inline-flex items-center gap-2 px-8 py-3.5 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                Get In Touch
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
            </a>
        </div>
    </section>

@endsection