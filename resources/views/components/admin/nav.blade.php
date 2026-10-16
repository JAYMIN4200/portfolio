@props(['groups' => [], 'mobile' => false])

@php
    $routeName = request()->route()?->getName() ?? '';

    $isItemActive = function (array $item) use ($routeName) {
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

    $isGroupActive = fn (array $group) => collect($group['items'])->contains(fn ($item) => $isItemActive($item));
@endphp

@foreach ($groups as $group)
    @php
        $default = $group['items'][0];
        $active = $isGroupActive($group);
        $label = count($group['items']) === 1 ? $default['label'] : $group['label'];
        $icon = $group['icon'] ?? $default['icon'];
        $badge = $group['badge'] ?? null;
    @endphp
    <a href="{{ route($default['route']) }}" title="{{ $label }}"
        data-sidebar-group-label="{{ $label }}"
        class="{{ $mobile ? '' : 'aside-link ' }}flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg text-sm font-medium {{ $active ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors' }}">
        <span class="flex items-center gap-3 min-w-0">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}"/></svg>
            <span class="admin-link-label min-w-0 truncate">{{ $label }}</span>
        </span>
        @if ($badge && $badge['count'] > 0)
            <span class="admin-badge inline-flex items-center justify-center min-w-5 h-5 px-1.5 rounded-full text-xs font-bold {{ $badge['class'] }}">{{ $badge['count'] }}</span>
        @endif
    </a>
@endforeach

@unless ($mobile)
    {{-- Hidden index of every module page (including switch-only siblings) so the
         sidebar search can reach any page from any screen. --}}
    <ul id="sidebarModuleExtra" class="hidden">
        @foreach ($groups as $group)
            @foreach ($group['items'] as $item)
                @if (count($group['items']) > 1)
                    <li>
                        <a href="{{ route($item['route']) }}" data-sidebar-group-label="{{ $group['label'] }}">{{ $item['label'] }}</a>
                    </li>
                @endif
            @endforeach
        @endforeach
    </ul>
@endunless
