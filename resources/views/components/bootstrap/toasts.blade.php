@php
    $toasts = collect([
        'success' => session('success'),
        'error' => session('error'),
        'status' => session('status'),
    ])->filter()->all();
@endphp

@if ($toasts)
    <div data-toast-container class="fixed top-4 right-4 z-[70] flex flex-col gap-3 w-full max-w-sm">
        @foreach ($toasts as $type => $message)
            <div data-toast data-toast-type="{{ $type }}"
                 class="pointer-events-auto flex items-start gap-3 p-4 rounded-xl shadow-2xl border-2 animate-toast-in {{ $type === 'error' ? 'bg-white border-red-200' : ($type === 'status' ? 'bg-white border-indigo-200' : 'bg-white border-emerald-200') }}">
                <span class="shrink-0 w-8 h-8 rounded-full flex items-center justify-center {{ $type === 'error' ? 'bg-red-100 text-red-600' : ($type === 'status' ? 'bg-indigo-100 text-indigo-600' : 'bg-emerald-100 text-emerald-600') }}">
                    @if ($type === 'error')
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    @else
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    @endif
                </span>
                <p class="flex-1 text-sm font-medium text-slate-700">{{ $message }}</p>
                <button type="button" data-toast-close class="shrink-0 p-1 text-slate-400 hover:text-slate-600 transition-colors" aria-label="Close">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        @endforeach
    </div>
@endif

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-toast]').forEach(toast => {
                const remove = () => {
                    toast.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    toast.style.opacity = '0';
                    toast.style.transform = 'translateX(100%)';
                    setTimeout(() => toast.remove(), 300);
                };
                toast.querySelector('[data-toast-close]')?.addEventListener('click', remove);
                setTimeout(remove, 4000);
            });
        });
    </script>
@endpush