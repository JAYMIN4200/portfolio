@props(['skill'])

<div class="glass-card rounded-xl p-5 hover-slide-left" data-reveal="up">
    <div class="flex items-center justify-between mb-3">
        <div class="flex items-center gap-3">
            @if ($skill->icon)
                <img src="{{ $skill->icon }}" alt="{{ $skill->name }}" class="w-8 h-8 object-contain" loading="lazy">
            @else
                <div class="w-8 h-8 rounded-lg bg-primary-500/10 border border-primary-500/20 flex items-center justify-center text-primary-400 font-bold text-sm">
                    {{ strtoupper(substr($skill->name, 0, 1)) }}
                </div>
            @endif
            <h4 class="text-white font-semibold">{{ $skill->name }}</h4>
        </div>
        <span class="text-sm font-semibold text-primary-400">{{ $skill->proficiency }}%</span>
    </div>
    <div class="h-2 rounded-full bg-white/5 overflow-hidden">
        <div class="h-full rounded-full bg-gradient-to-r from-indigo-500 to-purple-500"
             data-skill-bar data-target-width="{{ $skill->proficiency }}" style="--target-width: {{ $skill->proficiency }}%"></div>
    </div>
</div>