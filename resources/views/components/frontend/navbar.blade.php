@props(['settings' => []])

@php
    $profile = App\Models\Profile::first();
    $brandFontClass = $profile && $profile->brand_font
        ? 'font-brand-' . $profile->brand_font
        : 'font-brand-dancing-script';
@endphp

<header class="fixed top-0 inset-x-0 z-50 bg-slate-950/80 backdrop-blur-lg border-b border-white/5">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                @if (!empty($settings['signature_image']))
                    <img src="{{ asset('storage/' . $settings['signature_image']) }}" alt="{{ $settings['site_title'] ?? config('app.name') }}" class="h-9 w-auto object-contain drop-shadow group-hover:scale-105 transition-transform">
                @else
                    <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-indigo-500/30 group-hover:scale-105 transition-transform">
                        {{ strtoupper(substr($settings['site_title'] ?? config('app.name'), 0, 1)) }}
                    </div>
                @endif
                <span class="{{ $brandFontClass }} text-white text-2xl tracking-wide leading-none">{{ $settings['site_title'] ?? config('app.name') }}</span>
            </a>

            <div class="hidden lg:flex items-center justify-end gap-6 flex-1">
                <a href="{{ route('home') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'text-white' : 'text-slate-300 hover:text-white' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('about') ? 'text-white' : 'text-slate-300 hover:text-white' }}">About</a>
                <a href="{{ route('projects.index') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('projects.*') ? 'text-white' : 'text-slate-300 hover:text-white' }}">Projects</a>
                <a href="{{ route('clients.index') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('clients.*') ? 'text-white' : 'text-slate-300 hover:text-white' }}">Clients</a>
                <a href="{{ route('blog.index') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('blog.*') ? 'text-white' : 'text-slate-300 hover:text-white' }}">Blog</a>
                <a href="{{ route('home') . '#services' }}" class="nav-link text-sm font-medium transition-colors hover:text-white">Services</a>
                <a href="{{ route('contact') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('contact') ? 'text-white' : 'text-slate-300 hover:text-white' }}">Contact</a>
                <a href="{{ route('meetings.book') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('meetings.book') ? 'text-white' : 'text-slate-300 hover:text-white' }}">Book a Meeting</a>

                <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 pl-5 pr-4 py-2 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white text-sm font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                    Hire Me
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="flex items-center gap-2">
                <button type="button" data-theme-toggle class="p-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 transition-colors" aria-label="Toggle theme">
                    <svg data-icon-sun class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    <svg data-icon-moon class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                </button>
                <button data-mobile-menu-toggle class="lg:hidden p-2 text-slate-300 hover:text-white" aria-label="Toggle menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>

        <div data-mobile-menu class="hidden lg:hidden pb-4">
            <a href="{{ route('home') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Home</a>
            <a href="{{ route('about') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>About</a>
            <a href="{{ route('projects.index') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Projects</a>
            <a href="{{ route('clients.index') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Clients</a>
            <a href="{{ route('blog.index') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Blog</a>
            <a href="{{ route('home') . '#services' }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Services</a>
            <a href="{{ route('contact') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Contact</a>
            <a href="{{ route('meetings.book') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Book a Meeting</a>
            <a href="{{ route('contact') }}" class="block mt-2 px-4 py-2.5 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white text-center font-semibold">Hire Me</a>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.querySelector('[data-mobile-menu-toggle]');
        const menu = document.querySelector('[data-mobile-menu]');
        if (!toggle || !menu) return;

        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        menu.querySelectorAll('[data-mobile-link]').forEach(link => {
            link.addEventListener('click', () => menu.classList.add('hidden'));
        });
    });
</script>