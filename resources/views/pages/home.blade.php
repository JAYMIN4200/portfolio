@extends('layouts.frontend')

@section('title', 'Home')

@php
    $profile = App\Models\Profile::with('user')->first();
    $settings = App\Models\Setting::getMany([
        'site_title', 'site_tagline', 'site_description', 'meta_keywords'
    ]);
@endphp

@section('content')

    <x-frontend.hero :profile="$profile" :settings="$settings" />

    <section id="about" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="About Me"
            title="Get to know me"
            subtitle="A quick introduction to who I am, what I do, and what drives me."
        />

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl opacity-10 blur-2xl"></div>
                <div class="relative rounded-2xl overflow-hidden border border-white/10 aspect-4/3">
                    @if ($profile && $profile->avatar)
                        <img src="{{ asset('storage/' . $profile->avatar) }}" alt="{{ $profile->user->name }}" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-slate-800 to-slate-900 flex items-center justify-center">
                            <span class="text-9xl text-white/10 font-bold">{{ strtoupper(substr($profile->user->name ?? 'D', 0, 1)) }}</span>
                        </div>
                    @endif
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-white mb-4">A passionate {{ $profile->title ?? 'developer' }} crafting digital experiences</h3>
                <div class="space-y-4 text-slate-400 leading-relaxed">
                    <p>{{ $profile->bio ?? '' }}</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Name</p>
                        <p class="text-white font-medium">{{ $profile->user->name ?? '—' }}</p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Email</p>
                        <p class="text-white font-medium break-all">{{ $profile->user->email ?? '—' }}</p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Experience</p>
                        <p class="text-white font-medium">{{ $profile->location ?? '—' }}</p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Freelance</p>
                        <p class="inline-flex items-center gap-2 text-white font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Available
                        </p>
                    </div>
                </div>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                        Let's Talk
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
                    </a>
                    @if ($profile && $profile->resume_path)
                        <a href="{{ asset('storage/' . $profile->resume_path) }}" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-white/10 text-white font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            Download Resume
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @if ($skills->isNotEmpty())
    <section id="skills" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="My Skills"
            title="Skills & expertise"
            subtitle="The technologies and tools I work with every day."
        />

        <div class="space-y-10">
            @foreach ($skills as $category => $categorySkills)
                <div>
                    <h3 class="text-white font-semibold text-xl mb-5 flex items-center gap-2">
                        <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-indigo-500 to-purple-600"></span>
                        {{ ucfirst(str_replace('-', ' ', $category)) }}
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($categorySkills as $skill)
                            <x-frontend.skill-bar :skill="$skill" />
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    @if ($experiences->isNotEmpty())
    <section id="experience" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="Experience"
            title="Where I've worked"
            subtitle="My professional journey and work history."
        />

        <div class="max-w-3xl mx-auto">
            @foreach ($experiences as $experience)
                <x-frontend.experience-card :experience="$experience" />
            @endforeach
        </div>
    </section>
    @endif

    @if ($projects->isNotEmpty())
    <section id="projects" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="Portfolio"
            title="Featured projects"
            subtitle="A selection of my recent work and what I've been building."
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($projects as $project)
                <x-frontend.project-card :project="$project" />
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-white/10 text-white font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">
                View All Projects
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
            </a>
        </div>
    </section>
    @endif

    @if ($services->isNotEmpty())
    <section id="services" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="Services"
            title="What I can do for you"
            subtitle="Services I offer to help bring your ideas to life."
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <x-frontend.service-card :service="$service" />
            @endforeach
        </div>
    </section>
    @endif

    <section id="contact" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="Contact"
            title="Get in touch"
            subtitle="Ready to start a project together? Let's talk."
        />

        <x-frontend.contact-form :dark="false" />
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const el = document.querySelector('[data-typewriter]');
            if (!el) return;
            const words = JSON.parse(el.dataset.words || '[]');
            if (!words.length) return;

            let wordIndex = 0;
            let charIndex = 0;
            let deleting = false;

            const type = () => {
                const word = words[wordIndex];
                if (deleting) {
                    el.textContent = word.substring(0, charIndex - 1);
                    charIndex--;
                    if (charIndex <= 0) {
                        deleting = false;
                        wordIndex = (wordIndex + 1) % words.length;
                        setTimeout(type, 400);
                        return;
                    }
                } else {
                    el.textContent = word.substring(0, charIndex + 1);
                    charIndex++;
                    if (charIndex === word.length) {
                        deleting = true;
                        setTimeout(type, 1800);
                        return;
                    }
                }
                setTimeout(type, deleting ? 50 : 100);
            };
            type();
        });
    </script>

@endsection
