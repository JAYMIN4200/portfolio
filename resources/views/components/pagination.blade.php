@props(['paginator'])

@if ($paginator->hasPages())
    {{ $paginator->withQueryString()->links() }}
@endif