@props(['name', 'value' => '', 'id' => null, 'placeholder' => 'Write something...', 'rows' => 12])

@php
    $editorId = $id ?? 'rich-editor-' . \Illuminate\Support\Str::random(6);
@endphp

<div data-rich-editor data-editor-id="{{ $editorId }}">
    <textarea name="{{ $name }}" id="{{ $editorId }}-source" class="sr-only" data-editor-source>{{ $value }}</textarea>
    <div class="rich-editor border border-slate-300 rounded-lg overflow-hidden focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-500/20 transition-all">
        <div class="flex items-center gap-0.5 p-1.5 border-b border-slate-200 bg-slate-50 flex-wrap" data-editor-toolbar>
            <button type="button" data-editor-cmd="bold" title="Bold" class="p-2 rounded-lg text-slate-600 hover:text-indigo-600 hover:bg-indigo-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 4h7a4 4 0 014 4 4 4 0 01-4 4H6zM6 12h9a4 4 0 014 4 4 4 0 01-4 4H6z"/></svg>
            </button>
            <button type="button" data-editor-cmd="italic" title="Italic" class="p-2 rounded-lg text-slate-600 hover:text-indigo-600 hover:bg-indigo-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 4h10M6 20h10M12 4L8 20"/></svg>
            </button>
            <button type="button" data-editor-cmd="underline" title="Underline" class="p-2 rounded-lg text-slate-600 hover:text-indigo-600 hover:bg-indigo-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 3v9a4 4 0 008 0V3M5 20h14"/></svg>
            </button>
            <span class="w-px h-5 bg-slate-200 mx-1"></span>
            <button type="button" data-editor-cmd="formatBlock" data-editor-arg="h2" title="Heading" class="p-2 rounded-lg text-slate-600 hover:text-indigo-600 hover:bg-indigo-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5v14M5 12h8M13 5v14M17 15l3 4m0-5l-3 4"/></svg>
            </button>
            <button type="button" data-editor-cmd="insertUnorderedList" title="Bullet list" class="p-2 rounded-lg text-slate-600 hover:text-indigo-600 hover:bg-indigo-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/></svg>
            </button>
            <button type="button" data-editor-cmd="insertOrderedList" title="Numbered list" class="p-2 rounded-lg text-slate-600 hover:text-indigo-600 hover:bg-indigo-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6h11M9 12h11M9 18h11M3 5l1-1v4m0 10l-1-1h3M4 14v4"/></svg>
            </button>
            <button type="button" data-editor-cmd="createLink" title="Insert link" class="p-2 rounded-lg text-slate-600 hover:text-indigo-600 hover:bg-indigo-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 010 5.656l-3 3a4 4 0 01-5.656-5.656l1.5-1.5m4.328-4.328a4 4 0 015.656 0l1.5 1.5a4 4 0 01-5.656 5.656l-3-3M7 17l10-10"/></svg>
            </button>
            <span class="flex-1"></span>
            <span class="text-xs text-slate-400 px-2" data-editor-status>HTML</span>
        </div>
        <div class="px-3 py-2.5 text-slate-800 leading-relaxed focus:outline-none overflow-y-auto rich-editor-content" style="min-height: {{ $rows * 2.4 + 2 }}rem;" contenteditable="true" data-editor-content></div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const root = document.querySelector('[data-editor-id="{{ $editorId }}"]');
            if (!root || root.dataset.initialized) return;
            root.dataset.initialized = '1';

            const source = root.querySelector('[data-editor-source]');
            const content = root.querySelector('[data-editor-content]');

            const sync = () => {
                source.value = content.innerHTML;
            };

            content.innerHTML = source.value || '';
            content.addEventListener('input', sync);
            content.addEventListener('blur', sync);

            root.querySelectorAll('[data-editor-cmd]').forEach(btn => {
                btn.addEventListener('mousedown', (e) => e.preventDefault());
                btn.addEventListener('click', () => {
                    const cmd = btn.dataset.editorCmd;
                    const arg = btn.dataset.editorArg || null;

                    if (cmd === 'createLink') {
                        const url = prompt('Enter link URL:', 'https://');
                        if (url) {
                            document.execCommand('createLink', false, url);
                        }
                    } else {
                        document.execCommand(cmd, false, arg);
                    }
                    sync();
                    content.focus();
                });
            });

            const form = root.closest('form[data-submitting]');
            if (form) {
                form.addEventListener('submit', sync);
            }
        });
    </script>
@endpush