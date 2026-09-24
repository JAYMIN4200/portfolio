<!DOCTYPE html>
<html lang="en" class="scroll-smooth" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        (function () {
            var stored = null;
            try { stored = localStorage.getItem('frontend-theme'); } catch (e) {}
            document.documentElement.dataset.theme = stored === 'light' ? 'light' : 'dark';
        })();
    </script>

    @if (!empty($settings['favicon']))
        <link rel="icon" type="image/png" href="{{ asset('storage/' . $settings['favicon']) }}">
    @else
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128187;</text></svg>">
    @endif

    <title>@hasSection('title')@yield('title') | @endif{{ $settings['site_title'] ?? config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', $settings['site_description'] ?? '')">
    <meta name="keywords" content="{{ $settings['meta_keywords'] ?? '' }}">
    <meta name="author" content="{{ $settings['site_title'] ?? config('app.name') }}">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $settings['site_title'] ?? config('app.name') }}">
    <meta property="og:title" content="@hasSection('title')@yield('title') | @endif{{ $settings['site_title'] ?? config('app.name') }}">
    <meta property="og:description" content="@yield('meta_description', $settings['site_description'] ?? '')">

    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="{{ url()->current() }}">

    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-300 antialiased min-h-screen flex flex-col">

    <x-frontend.navbar :settings="$settings" />

    <main class="flex-1">
        @yield('content')
    </main>

    <x-frontend.footer :settings="$settings" />

    <button type="button" data-scroll-top data-scroll-top-target aria-label="Back to top"
            class="fixed bottom-6 right-6 z-50 w-11 h-11 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 opacity-0 pointer-events-none translate-y-3 transition-all duration-300 hover:scale-105 flex items-center justify-center">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggle = document.querySelector('[data-theme-toggle]');
            const applyThemeUI = () => {
                const theme = document.documentElement.dataset.theme;
                document.querySelectorAll('[data-icon-sun]').forEach(el => el.classList.toggle('hidden', theme === 'dark'));
                document.querySelectorAll('[data-icon-moon]').forEach(el => el.classList.toggle('hidden', theme === 'light'));
            };
            if (themeToggle) {
                themeToggle.addEventListener('click', () => {
                    const next = document.documentElement.dataset.theme === 'light' ? 'dark' : 'light';
                    document.documentElement.dataset.theme = next;
                    try { localStorage.setItem('frontend-theme', next); } catch (e) {}
                    applyThemeUI();
                });
            }
            applyThemeUI();

            const scrollTop = document.querySelector('[data-scroll-top]');
            if (scrollTop) {
                const toggle = () => {
                    const show = window.scrollY > 400;
                    scrollTop.classList.toggle('opacity-0', !show);
                    scrollTop.classList.toggle('pointer-events-none', !show);
                    scrollTop.classList.toggle('translate-y-3', !show);
                };
                window.addEventListener('scroll', () => { requestAnimationFrame(toggle); }, { passive: true });
                scrollTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
                toggle();
            }

            document.querySelectorAll('[data-alert]').forEach(el => {
                setTimeout(() => {
                    el.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(-4px)';
                    setTimeout(() => el.remove(), 400);
                }, 3000);
            });
            document.querySelectorAll('[data-alert-close]').forEach(btn => {
                btn.addEventListener('click', () => btn.closest('[data-alert]')?.remove());
            });
        });
    </script>

    @stack('scripts')

    @include('components.inline-validation')
</body>
</html>