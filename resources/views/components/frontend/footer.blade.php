@props(['settings' => []])

@php
    $profile = App\Models\Profile::with('user')->first();
@endphp

<footer class="border-t border-white/5 bg-slate-950 mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold shadow-lg shadow-indigo-500/30">
                        {{ strtoupper(substr($settings['site_title'] ?? config('app.name'), 0, 1)) }}
                    </div>
                    <span class="text-white font-semibold">{{ $settings['site_title'] ?? config('app.name') }}</span>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed">{{ $settings['site_tagline'] ?? '' }}</p>
                @if ($profile)
                <div class="flex items-center gap-3 mt-4">
                    @if ($profile->github)
                        <a href="{{ $profile->github }}" target="_blank" rel="noopener" aria-label="GitHub" class="w-9 h-9 rounded-lg glass-card flex items-center justify-center hover:text-primary-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                    </a>
                    @endif
                    @if ($profile->linkedin)
                        <a href="{{ $profile->linkedin }}" target="_blank" rel="noopener" aria-label="LinkedIn" class="w-9 h-9 rounded-lg glass-card flex items-center justify-center hover:text-primary-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/></svg>
                    </a>
                    @endif
                    @if ($profile->twitter)
                        <a href="{{ $profile->twitter }}" target="_blank" rel="noopener" aria-label="Twitter" class="w-9 h-9 rounded-lg glass-card flex items-center justify-center hover:text-primary-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    @endif
                </div>
                @endif
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-white transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-white transition-colors">About Me</a></li>
                    <li><a href="{{ route('projects.index') }}" class="text-slate-400 hover:text-white transition-colors">Projects</a></li>
                    <li><a href="{{ route('home') . '#services' }}" class="text-slate-400 hover:text-white transition-colors">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">Get In Touch</h4>
                @if ($profile)
                <ul class="space-y-3 text-sm">
                    @if ($profile->email ?? $profile->user->email)
                        <li class="flex items-center gap-3 text-slate-400">
                            <svg class="w-4 h-4 text-primary-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:{{ $profile->user->email }}" class="hover:text-white transition-colors break-all">{{ $profile->user->email }}</a>
                        </li>
                    @endif
                    @if ($profile->phone)
                        <li class="flex items-center gap-3 text-slate-400">
                            <svg class="w-4 h-4 text-primary-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <a href="tel:{{ $profile->phone }}" class="hover:text-white transition-colors">{{ $profile->phone }}</a>
                        </li>
                    @endif
                    @if ($profile->location)
                        <li class="flex items-center gap-3 text-slate-400">
                            <svg class="w-4 h-4 text-primary-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            {{ $profile->location }}
                        </li>
                    @endif
                </ul>
                @endif
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-white/5 text-center text-sm text-slate-500">
            &copy; {{ date('Y') }} {{ $settings['site_title'] ?? config('app.name') }}. {{ $settings['footer_text'] ?? 'All rights reserved.' }}
        </div>
    </div>
</footer>