@props(['settings' => []])

@php
    $profile = App\Models\Profile::with('user')->first();
    $brandFontClass = $profile && $profile->brand_font
        ? 'font-brand-' . $profile->brand_font
        : 'font-brand-dancing-script';

    $socialIcons = $profile ? [
        ['label' => 'GitHub', 'href' => $profile->github, 'size' => 'w-4 h-4', 'stroke' => false,
            'd' => 'M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z'],
        ['label' => 'LinkedIn', 'href' => $profile->linkedin, 'size' => 'w-4 h-4', 'stroke' => false,
            'd' => 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z'],
        ['label' => 'Twitter', 'href' => $profile->twitter, 'size' => 'w-4 h-4', 'stroke' => false,
            'd' => 'M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z'],
        ['label' => 'WhatsApp', 'href' => $profile->whatsapp ? 'https://wa.me/' . preg_replace('/\D/', '', $profile->whatsapp) : null, 'size' => 'w-5 h-5', 'stroke' => false,
            'd' => 'M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z'],
        ['label' => 'Telegram', 'href' => $profile->telegram, 'size' => 'w-5 h-5', 'stroke' => false,
            'd' => 'M11.944 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0a12 12 0 00-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 01.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z'],
        ['label' => 'Instagram', 'href' => $profile->instagram, 'size' => 'w-4 h-4', 'stroke' => false,
            'd' => 'M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z'],
        ['label' => 'Website', 'href' => $profile->website, 'size' => 'w-4 h-4', 'stroke' => true,
            'd' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9'],
        ['label' => 'Facebook', 'href' => $profile->facebook, 'size' => 'w-4 h-4', 'stroke' => false,
            'd' => 'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z'],
    ] : [];

    $socialIcons = array_values(array_filter($socialIcons, fn ($icon) => ! empty($icon['href'])));
    $hasSocials = ! empty($socialIcons);
@endphp

<footer class="border-t border-white/5 bg-slate-950 mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <div class="flex items-center gap-2 mb-4">
                    @if (!empty($settings['signature_image']))
                        <img src="{{ asset('storage/' . $settings['signature_image']) }}" alt="{{ $settings['site_title'] ?? config('app.name') }}" class="h-8 w-auto object-contain">
                    @else
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold shadow-lg shadow-indigo-500/30">
                            {{ strtoupper(substr($settings['site_title'] ?? config('app.name'), 0, 1)) }}
                        </div>
                    @endif
                    <span class="{{ $brandFontClass }} text-white text-xl tracking-wide leading-none">{{ $settings['site_title'] ?? config('app.name') }}</span>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed">{{ $settings['site_tagline'] ?? '' }}</p>

                @if ($hasSocials)
                    <div class="mt-5 grid grid-cols-4 gap-3 w-fit">
                        @foreach ($socialIcons as $icon)
                            <a href="{{ $icon['href'] }}" target="_blank" rel="noopener" aria-label="{{ $icon['label'] }}" class="w-9 h-9 rounded-lg glass-card flex items-center justify-center hover:text-primary-300">
                                <svg class="{{ $icon['size'] }}" viewBox="0 0 24 24" @if ($icon['stroke']) fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" @else fill="currentColor" @endif>
                                    <path d="{{ $icon['d'] }}" />
                                </svg>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-white transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-white transition-colors">About Me</a></li>
                    <li><a href="{{ route('projects.index') }}" class="text-slate-400 hover:text-white transition-colors">Projects</a></li>
                    <li><a href="{{ route('clients.index') }}" class="text-slate-400 hover:text-white transition-colors">Clients</a></li>
                    <li><a href="{{ route('home') . '#services' }}" class="text-slate-400 hover:text-white transition-colors">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">Resources</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('blog.index') }}" class="text-slate-400 hover:text-white transition-colors">Blog</a></li>
                    <li><a href="{{ route('faq') }}" class="text-slate-400 hover:text-white transition-colors">FAQ</a></li>
                    <li><a href="{{ route('pages.show', 'terms') }}" class="text-slate-400 hover:text-white transition-colors">Terms</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">Get In Touch</h4>
                @if ($profile)
                <ul class="space-y-3 text-sm">
                    @if ($profile->user->email)
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