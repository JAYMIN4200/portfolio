@props(['experience'])

<div class="relative pl-8 pb-10 border-l-2 border-white/10 last:border-transparent" data-reveal="left">
    <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 border-4 border-slate-950 -translate-x-1/2"></div>

    <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
        <h4 class="text-white font-semibold text-lg">{{ $experience->position }}</h4>
        @if ($experience->is_current)
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Current</span>
        @endif
    </div>

    <div class="flex flex-wrap items-center gap-3 mb-3 text-sm">
        @if ($experience->website)
            <a href="{{ $experience->website }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 text-primary-400 font-medium hover:text-primary-300 transition-colors">
                @if ($experience->logo)
                    <img src="{{ asset('storage/' . $experience->logo) }}" alt="{{ $experience->company }}" class="w-5 h-5 rounded object-contain">
                @else
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                @endif
                {{ $experience->company }}
                <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        @else
            <span class="inline-flex items-center gap-1.5 text-primary-400 font-medium">
                @if ($experience->logo)
                    <img src="{{ asset('storage/' . $experience->logo) }}" alt="{{ $experience->company }}" class="w-5 h-5 rounded object-contain">
                @else
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                @endif
                {{ $experience->company }}
            </span>
        @endif
        @if ($experience->location)
            <span class="inline-flex items-center gap-1.5 text-slate-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                {{ $experience->location }}
            </span>
        @endif
    </div>

    <p class="inline-flex items-center gap-2 text-xs font-medium text-slate-500 uppercase tracking-wider mb-3">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        {{ $experience->start_date->format('M Y') }} — {{ $experience->is_current ? 'Present' : ($experience->end_date ? $experience->end_date->format('M Y') : 'Present') }}
    </p>

    @if ($experience->description)
        <p class="text-slate-400 text-sm leading-relaxed">{{ $experience->description }}</p>
    @endif
</div>