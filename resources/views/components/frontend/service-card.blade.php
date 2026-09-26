@props(['service'])

<div class="glass-card rounded-xl p-6 h-full tilt-card spotlight-card" data-reveal="up">
    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/25 mb-4">
        @if ($service->icon)
            <img src="{{ $service->icon }}" alt="{{ $service->title }}" class="w-6 h-6 object-contain">
        @else
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        @endif
    </div>
    <h3 class="text-white font-semibold text-lg mb-2">{{ $service->title }}</h3>
    <p class="text-slate-400 text-sm leading-relaxed">{{ $service->description }}</p>
</div>