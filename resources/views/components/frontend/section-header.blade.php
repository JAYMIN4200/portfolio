@props(['title', 'subtitle' => null, 'align' => 'center', 'badge' => null])

<div class="mb-12 {{ $align === 'left' ? 'text-left' : 'text-center' }}" data-reveal="up">
    @if ($badge)
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-4">
            {{ $badge }}
        </span>
    @endif
    <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">{{ $title }}</h2>
    @if ($subtitle)
        <p class="mt-4 text-slate-400 text-lg max-w-2xl {{ $align === 'center' ? 'mx-auto' : '' }}">{{ $subtitle }}</p>
    @endif
</div>
