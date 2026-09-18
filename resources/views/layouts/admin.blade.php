<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@hasSection('title')@yield('title') | @endif Admin Panel</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128272;</text></svg>">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen">

    <div class="min-h-screen flex">
        <aside class="hidden lg:flex fixed inset-y-0 left-0 w-64 bg-slate-900 flex-col z-30">
            <div class="flex items-center gap-3 px-6 py-5 border-b border-slate-800">
                <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-lg">
                    A
                </div>
                <div>
                    <p class="text-white font-semibold text-sm leading-tight">Admin Panel</p>
                    <p class="text-slate-400 text-xs">Portfolio Admin</p>
                </div>
            </div>

            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7V5a1 1 0 011 1v13a1 1 0 01-1 1H4a1 1 0 01-1-1v-7z"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.profile.edit') }}" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.profile.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Profile
                </a>
                @php $unread = App\Models\Message::unread()->count(); @endphp
                <a href="{{ route('admin.messages.index') }}" class="aside-link flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.messages.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors' }}">
                    <span class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        Messages
                    </span>
                    @if ($unread > 0)
                        <span class="inline-flex items-center justify-center min-w-5 h-5 px-1.5 rounded-full text-xs font-bold bg-red-500 text-white">{{ $unread }}</span>
                    @endif
                </a>

                <p class="px-4 pt-5 pb-2 text-xs font-semibold uppercase tracking-wider text-slate-600">Content</p>

                <a href="{{ route('admin.skills.index') }}" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.skills.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    Skills
                </a>
                <a href="{{ route('admin.experiences.index') }}" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.experiences.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    Experience
                </a>
                <a href="{{ route('admin.projects.index') }}" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.projects.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 7h12M6 11h12M6 15h8m-5 5H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v8"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v1a1 1 0 001 1h1a1 1 0 001-1v-5h-2v4m-9-8l4 4 4-4"/></svg>
                    Projects
                </a>
                <a href="{{ route('admin.services.index') }}" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.services.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    Services
                </a>

                <p class="px-4 pt-5 pb-2 text-xs font-semibold uppercase tracking-wider text-slate-600">Configuration</p>

                <a href="{{ route('admin.settings.index') }}" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.settings.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Settings
                </a>
                <a href="{{ route('home') }}" target="_blank" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:text-white hover:bg-slate-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    View Website
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-indigo-600 flex items-center justify-center text-white font-semibold text-sm uppercase">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-white text-sm font-medium truncate">{{ auth()->user()->name }}</p>
                        <p class="text-slate-500 text-xs truncate">{{ auth()->user()->email }}</p>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="p-2 text-slate-400 hover:text-red-400 transition-colors" title="Logout">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <div class="flex-1 lg:ml-64 flex flex-col min-w-0">
            <header class="sticky top-0 z-20 bg-white border-b border-slate-200 h-16 flex items-center justify-between px-4 sm:px-6">
                <button type="button" data-mobile-admin-toggle class="lg:hidden p-2 rounded-lg hover:bg-slate-100" aria-label="Toggle sidebar">
                    <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>

                <div class="hidden sm:flex items-center gap-2 text-sm">
                    @auth
                        <a href="{{ route('home') }}" target="_blank" class="inline-flex items-center gap-1.5 text-slate-500 hover:text-indigo-600 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            View Site
                        </a>
                    @endauth
                </div>

                <div class="flex items-center gap-4">
                    <span class="text-sm text-slate-500 hidden sm:block">Welcome back, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="lg:hidden">
                        @csrf
                        <button type="submit" class="p-2 rounded-lg text-slate-500 hover:text-red-600 hover:bg-slate-100 transition-colors" title="Logout">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        </button>
                    </form>
                </div>
            </header>

            <div data-mobile-admin-sidebar class="hidden fixed inset-0 z-40 lg:hidden">
                <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" data-mobile-admin-close></div>
                <div class="absolute inset-y-0 left-0 w-64 bg-slate-900 flex flex-col overflow-y-auto">
                    <div class="flex items-center justify-between px-6 py-5 border-b border-slate-800">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-lg">A</div>
                            <p class="text-white font-semibold text-sm">Admin Panel</p>
                        </div>
                        <button type="button" class="p-2 text-slate-400 hover:text-white" data-mobile-admin-close aria-label="Close menu">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                    <nav class="py-4 px-3 space-y-1 flex-1">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">Dashboard</a>
                        <a href="{{ route('admin.profile.edit') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.profile.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">Profile</a>
                        <a href="{{ route('admin.messages.index') }}" class="flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.messages.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">Messages</a>
                        <a href="{{ route('admin.skills.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.skills.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">Skills</a>
                        <a href="{{ route('admin.experiences.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.experiences.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">Experience</a>
                        <a href="{{ route('admin.projects.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.projects.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">Projects</a>
                        <a href="{{ route('admin.services.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.services.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">Services</a>
                        <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.settings.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">Settings</a>
                        <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:text-white hover:bg-slate-800">View Website</a>
                    </nav>
                    <div class="p-4 border-t border-slate-800">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-indigo-600 flex items-center justify-center text-white font-semibold text-sm uppercase">{{ substr(auth()->user()->name, 0, 1) }}</div>
                            <p class="text-white text-sm font-medium truncate">{{ auth()->user()->name }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <main class="flex-1 p-6 sm:p-8">
                @if (session('success'))
                    <div class="mb-6 flex items-center justify-between gap-4 p-4 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-700" data-alert>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span class="text-sm font-medium">{{ session('success') }}</span>
                        </div>
                        <button type="button" class="text-emerald-500 hover:text-emerald-700" data-alert-close aria-label="Close">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-6 flex items-center justify-between gap-4 p-4 rounded-lg bg-red-50 border border-red-200 text-red-700" data-alert>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span class="text-sm font-medium">{{ session('error') }}</span>
                        </div>
                        <button type="button" class="text-red-500 hover:text-red-700" data-alert-close aria-label="Close">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 flex items-center justify-between gap-4 p-4 rounded-lg bg-red-50 border border-red-200 text-red-700" data-alert>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span class="text-sm font-medium">Please fix the errors below and try again.</span>
                        </div>
                        <button type="button" class="text-red-500 hover:text-red-700" data-alert-close aria-label="Close">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileToggle = document.querySelector('[data-mobile-admin-toggle]');
            const mobileSidebar = document.querySelector('[data-mobile-admin-sidebar]');
            const closeButtons = document.querySelectorAll('[data-mobile-admin-close]');

            const toggleSidebar = () => mobileSidebar?.classList.toggle('hidden');
            if (mobileToggle) mobileToggle.addEventListener('click', toggleSidebar);
            closeButtons.forEach(btn => btn.addEventListener('click', () => mobileSidebar?.classList.add('hidden')));

            document.querySelectorAll('[data-alert-close]').forEach(btn => {
                btn.addEventListener('click', () => btn.closest('[data-alert]')?.remove());
            });

            document.querySelectorAll('[data-confirm]').forEach(form => {
                form.addEventListener('submit', (e) => {
                    if (!confirm(form.dataset.confirm)) e.preventDefault();
                });
            });
        });
    </script>

    @stack('scripts')
</body>
</html>