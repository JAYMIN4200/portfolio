@props(['testimonial'])

<div class="testimonial-card glass-card rounded-2xl p-6 flex flex-col shrink-0 w-[85%] sm:w-[400px] snap-start" data-reveal="up">
    <div class="flex items-center gap-0.5 mb-4">
        @for ($i = 1; $i <= 5; $i++)
            <svg class="w-4 h-4 {{ $testimonial->rating >= $i ? 'text-amber-400' : 'text-slate-600' }}" fill="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.196-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118L2.075 10.1c-.783-.57-.38-1.81.588-1.81h4.915a1 1 0 00.95-.69l1.519-4.674z"/>
            </svg>
        @endfor
    </div>

    <blockquote class="flex-1 text-slate-400 leading-relaxed italic">"{{ $testimonial->content }}"</blockquote>

    <div class="flex items-center gap-3 mt-6 pt-5 border-t border-white/5">
        @if ($testimonial->avatar)
            <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->client_name }}" class="w-10 h-10 rounded-full object-cover border border-white/10">
        @else
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-semibold text-sm uppercase">
                {{ substr($testimonial->client_name, 0, 1) }}
            </div>
        @endif
        <div>
            <p class="text-white font-semibold text-sm">{{ $testimonial->client_name }}</p>
            <p class="text-slate-500 text-xs">
                {{ $testimonial->role ? $testimonial->role . ' · ' : '' }}{{ $testimonial->company ?? '' }}
            </p>
        </div>
    </div>
</div>