@props([
    'colspan',
    'noun',
    'route' => null,
    'singular' => null,
])

@php
    $filtering = collect(request()->query())
        ->except('page')
        ->filter(fn ($value) => filled($value))
        ->isNotEmpty();
@endphp

<tr>
    <td colspan="{{ $colspan }}" class="px-5 py-12 text-center text-slate-400">
        @if ($filtering)
            No {{ $noun }} found.
        @else
            No {{ $noun }} yet.
            @if ($route && $singular)
                <a href="{{ route($route) }}" class="font-medium text-indigo-600 transition-colors hover:text-indigo-700">Add your {{ $singular }}</a>
            @endif
        @endif
    </td>
</tr>
