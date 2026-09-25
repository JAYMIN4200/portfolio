@extends('layouts.admin')
@section('title', 'Settings')
@section('content')

    @php
        $signaturePreview = App\Models\Setting::imageUrl('signature_image');
        $faviconPreview = App\Models\Setting::imageUrl('favicon');
    @endphp

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Website Settings</h1>
        <p class="text-slate-500 mt-1">Configure your portfolio website's appearance and metadata.</p>
    </div>

    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\SettingRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">General</h2>
            <div class="space-y-5">
                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Site Title</label>
                        <input type="text" name="settings[site_title]" value="{{ $settings['site_title'] ?? '' }}" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all" placeholder="Your Name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Tagline</label>
                        <input type="text" name="settings[site_tagline]" value="{{ $settings['site_tagline'] ?? '' }}" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all" placeholder="Full-Stack Developer & Designer">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Description</label>
                    <textarea name="settings[site_description]" rows="3" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none" placeholder="A short description of yourself and what you do...">{{ $settings['site_description'] ?? '' }}</textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Footer Text</label>
                    <input type="text" name="settings[footer_text]" value="{{ $settings['footer_text'] ?? '' }}" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all" placeholder="All rights reserved.">
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Home Hero</h2>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Typewriter Words</label>
                <p class="text-xs text-slate-400 mb-2">Shown one by one in the home hero headline. Separate each word/phrase with a comma.</p>
                <textarea name="settings[hero_words]" rows="3" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none" placeholder="Web Applications, Modern Websites, APIs &amp; Systems, Mobile Solutions">{{ $settings['hero_words'] ?? '' }}</textarea>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Branding</h2>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Signature Image</label>
                <p class="text-xs text-slate-400 mb-2">Shown next to your name in the header (replaces the letter logo). Use a transparent PNG signature.</p>
                <div data-signature-preview class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit {{ $signaturePreview ? '' : 'hidden' }}">
                    <img src="{{ $signaturePreview }}" alt="Signature" class="w-28 h-12 object-contain bg-slate-100">
                </div>
                <input type="file" name="settings[signature_image]" accept="image/*" data-signature-input
                       class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                <p class="text-xs text-slate-400 mt-1">Max 15MB. Recommended: transparent PNG, ~250x100px.</p>
            </div>
            <div class="mt-5">
                <label class="block text-sm font-medium text-slate-700 mb-1">Favicon</label>
                <p class="text-xs text-slate-400 mb-2">Shown in the browser tab next to your site name.</p>
                <div data-favicon-preview class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit {{ $faviconPreview ? '' : 'hidden' }}">
                    <img src="{{ $faviconPreview }}" alt="Favicon" class="w-12 h-12 object-contain bg-slate-100">
                </div>
                <input type="file" name="settings[favicon]" accept="image/*" data-favicon-input
                       class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                <p class="text-xs text-slate-400 mt-1">Max 2MB. Recommended: square PNG/ICO, 32x32 or 64x64px.</p>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">SEO</h2>
            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Meta Keywords</label>
                    <input type="text" name="settings[meta_keywords]" value="{{ $settings['meta_keywords'] ?? '' }}" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all" placeholder="developer, portfolio, web developer, designer">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Meta Description</label>
                    <textarea name="settings[meta_description]" rows="3" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none" placeholder="SEO description for search engines...">{{ $settings['meta_description'] ?? '' }}</textarea>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Contact</h2>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Contact Email</label>
                <input type="email" name="settings[contact_email]" value="{{ $settings['contact_email'] ?? '' }}" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all" placeholder="you@example.com">
            </div>
        </div>

        <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <span data-submit-label>Save Settings</span>
            <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
        </button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const setupImagePreview = (inputSelector, previewSelector) => {
                const input = document.querySelector(inputSelector);
                const preview = document.querySelector(previewSelector);
                if (!input || !preview) return;

                input.addEventListener('change', () => {
                    const file = input.files[0];
                    if (!file) return;
                    if (!file.type.startsWith('image/')) return;

                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const img = preview.querySelector('img');
                        img.src = e.target.result;
                        preview.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                });
            };

            setupImagePreview('[data-signature-input]', '[data-signature-preview]');
            setupImagePreview('[data-favicon-input]', '[data-favicon-preview]');
        });
    </script>

@endsection