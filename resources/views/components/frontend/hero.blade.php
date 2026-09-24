@props(['profile', 'settings' => []])

@php
    $defaultWords = ['Web Applications', 'Modern Websites', 'APIs & Systems', 'Mobile Solutions'];
    $heroWords = $settings['hero_words'] ?? null;
    if (is_string($heroWords) && trim($heroWords) !== '') {
        $heroWords = array_values(array_filter(array_map('trim', explode(',', $heroWords))));
    }
    if (! is_array($heroWords) || empty($heroWords)) {
        $heroWords = $defaultWords;
    }
@endphp

<section id="home" class="relative min-h-screen flex items-center overflow-hidden">
    <div class="hero-grid absolute inset-0"></div>
    <div class="hero-orb top-1/4 -left-32 w-96 h-96 bg-indigo-600/20"></div>
    <div class="hero-orb bottom-1/4 -right-32 w-96 h-96 bg-purple-600/20"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div data-reveal="up">
                <p class="text-sm font-medium tracking-widest uppercase text-primary-400 mb-4">
                    &lt;Welcome to my portfolio/&gt;
                </p>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-tight">
                    Hi, I'm <span class="gradient-text">{{ $profile->user->name ?? 'Developer' }}</span>
                </h1>
                <p class="mt-4 text-2xl sm:text-3xl font-semibold text-slate-200 flex flex-wrap items-center gap-2">
                    <span class="text-slate-400">I build</span>
                    <span class="gradient-text typewriter-cursor" data-typewriter data-words='{!! e(json_encode($heroWords)) !!}'>
                        {{ $heroWords[0] ?? 'Web Applications' }}
                    </span>
                </p>
                <p class="mt-6 text-lg text-slate-400 leading-relaxed max-w-xl">
                    {{ $profile->bio ?? '' }}
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                        View My Work
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
                    </a>

                    @if (!empty($profile->resume_path))
                        <a href="{{ route('resume.download') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-white/10 text-white font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            Download Resume
                        </a>
                    @endif
                </div>
            </div>

            <div class="hidden lg:flex justify-center" data-reveal="right">
                <div class="relative animate-float">
                    <div class="absolute -inset-4 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full opacity-30 blur-2xl"></div>
                    <div class="relative w-72 h-72 rounded-full overflow-hidden border-4 border-indigo-500/40 shadow-2xl shadow-indigo-500/30">
                        @if (!empty($profile->avatar))
                            <img src="{{ asset('storage/' . $profile->avatar) }}" alt="{{ $profile->user->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-slate-800 to-slate-900 flex items-center justify-center">
                                <span class="text-8xl text-white/20 font-bold">{{ strtoupper(substr($profile->user->name ?? 'D', 0, 1)) }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="absolute -bottom-4 left-4 glass-card rounded-2xl px-4 py-2 flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-sm text-white font-medium">Available for work</span>
                    </div>
                    <div class="absolute -top-2 -right-2 glass-card rounded-2xl px-4 py-2 text-sm text-white font-medium">
                        {{ $profile->title ?? 'Developer' }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#about" class="absolute bottom-8 left-1/2 -translate-x-1/2 text-slate-500 hover:text-primary-400 transition-colors animate-bounce" aria-label="Scroll down">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
    </a>
</section>