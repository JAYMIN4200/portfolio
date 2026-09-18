@props(['settings' => []])

<header class="fixed top-0 inset-x-0 z-50 bg-slate-950/80 backdrop-blur-lg border-b border-white/5">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-indigo-500/30 group-hover:scale-105 transition-transform">
                    {{ strtoupper(substr($settings['site_title'] ?? config('app.name'), 0, 1)) }}
                </div>
                <span class="text-white font-semibold text-lg tracking-tight">{{ $settings['site_title'] ?? config('app.name') }}</span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'text-white' : 'hover:text-white' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('about') ? 'text-white' : 'hover:text-white' }}">About</a>
                <a href="{{ route('projects.index') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('projects.*') ? 'text-white' : 'hover:text-white' }}">Projects</a>
                <a href="{{ route('home') . '#services' }}" class="nav-link text-sm font-medium transition-colors hover:text-white">Services</a>
                <a href="{{ route('contact') }}" class="nav-link text-sm font-medium transition-colors {{ request()->routeIs('contact') ? 'text-white' : 'hover:text-white' }}">Contact</a>

                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white text-sm font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                    Hire Me
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
                </a>
            </div>

            <button data-mobile-menu-toggle class="md:hidden p-2 text-slate-300 hover:text-white" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>

        <div data-mobile-menu class="hidden md:hidden pb-4">
            <a href="{{ route('home') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Home</a>
            <a href="{{ route('about') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>About</a>
            <a href="{{ route('projects.index') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Projects</a>
            <a href="{{ route('home') . '#services' }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Services</a>
            <a href="{{ route('contact') }}" class="block py-2 text-slate-300 hover:text-white" data-mobile-link>Contact</a>
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