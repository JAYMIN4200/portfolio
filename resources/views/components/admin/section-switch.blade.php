@props(['tabs' => [], 'title' => null])

@php
    $routeName = request()->route()?->getName() ?? '';

    $isActive = function (array $item) use ($routeName) {
        $bases = $item['matchers'] ?? [];
        $derived = preg_replace('/\.[^.]+$/', '', $item['route']);
        if (str_contains($derived, '.')) {
            $bases[] = $derived;
        }
        $bases[] = $item['route'];

        return collect($bases)->contains(function ($base) use ($routeName) {
            return $base !== '' && ($routeName === $base || str_starts_with($routeName, $base.'.'));
        });
    };
@endphp

@if (count($tabs) > 1)
    <div class="section-switch mb-5 flex items-center gap-2 rounded-xl border border-slate-200 bg-white p-1.5 shadow-sm">
        <div class="section-switch-track flex flex-1 items-center gap-1 overflow-x-auto no-scrollbar">
            @foreach ($tabs as $tab)
                @php $active = $isActive($tab); @endphp
                <a href="{{ route($tab['route']) }}" title="{{ $tab['label'] }}"
                    class="section-switch-item flex shrink-0 items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium transition-colors {{ $active ? 'is-active bg-indigo-600 text-white shadow-sm' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-800' }}">
                    <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $tab['icon'] }}"/></svg>
                    <span>{{ $tab['label'] }}</span>
                </a>
            @endforeach
        </div>
        @if ($title)
            <span class="section-switch-title hidden shrink-0 pr-2 text-xs font-semibold uppercase tracking-wide text-slate-400 sm:block">{{ $title }}</span>
        @endif
    </div>
@endif
