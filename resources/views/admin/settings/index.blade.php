@extends('layouts.admin')
@section('title', 'Settings')
@section('content')

    @php
        $signaturePreview = App\Models\Setting::imageUrl('signature_image');
        $faviconPreview = App\Models\Setting::imageUrl('favicon');
    @endphp

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Website Settings</h1>
        <p class="text-slate-500 mt-1">Manage your website's general, branding and SEO settings.</p>
    </div>

    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\SettingRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">General</h2>
            <div class="space-y-5">
                <div class="grid grid-cols-2 gap-5">
                    <x-form.input name="settings[site_title]" label="Site Title" :value="$settings['site_title'] ?? ''" placeholder="Your Name" />
                    <x-form.input name="settings[site_tagline]" label="Tagline" :value="$settings['site_tagline'] ?? ''" placeholder="Full-Stack Developer & Designer" />
                </div>
                <x-form.textarea name="settings[site_description]" label="Description" :rows="3" :value="$settings['site_description'] ?? ''" placeholder="A short description of yourself and what you do..." />
                <x-form.input name="settings[footer_text]" label="Footer Text" :value="$settings['footer_text'] ?? ''" placeholder="All rights reserved." />
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Home Hero</h2>
            <x-form.textarea name="settings[hero_words]" label="Typewriter Words" :rows="3" :value="$settings['hero_words'] ?? ''" hint="Shown one by one in the home hero headline. Separate each word/phrase with a comma." placeholder="Web Applications, Modern Websites, APIs &amp; Systems, Mobile Solutions" />
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Branding</h2>
            <x-form.field name="settings.signature_image" label="Signature Image" for="signature_image" hint="Max 15MB. Recommended: transparent PNG, ~250x100px.">
                <p class="text-xs text-slate-400 mb-2">Shown next to your name in the header (replaces the letter logo). Use a transparent PNG signature.</p>
                <div data-signature-preview class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit {{ $signaturePreview ? '' : 'hidden' }}">
                    <img src="{{ $signaturePreview }}" alt="Signature" class="w-28 h-12 object-contain bg-slate-100">
                </div>
                <input type="file" name="settings[signature_image]" id="signature_image" accept="image/*" data-signature-input class="form-file">
            </x-form.field>
            <x-form.field name="settings.favicon" label="Favicon" for="favicon" hint="Max 2MB. Recommended: square PNG/ICO, 32x32 or 64x64px." field-class="mt-5">
                <p class="text-xs text-slate-400 mb-2">Shown in the browser tab next to your site name.</p>
                <div data-favicon-preview class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit {{ $faviconPreview ? '' : 'hidden' }}">
                    <img src="{{ $faviconPreview }}" alt="Favicon" class="w-12 h-12 object-contain bg-slate-100">
                </div>
                <input type="file" name="settings[favicon]" id="favicon" accept="image/*" data-favicon-input class="form-file">
            </x-form.field>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">SEO</h2>
            <div class="space-y-5">
                <x-form.input name="settings[meta_keywords]" label="Meta Keywords" :value="$settings['meta_keywords'] ?? ''" placeholder="developer, portfolio, web developer, designer" />
                <x-form.textarea name="settings[meta_description]" label="Meta Description" :rows="3" :value="$settings['meta_description'] ?? ''" placeholder="SEO description for search engines..." />
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Contact</h2>
            <x-form.input name="settings[contact_email]" type="email" label="Contact Email" :value="$settings['contact_email'] ?? ''" placeholder="you@example.com" />
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Security</h2>
            <x-form.input name="settings[session_lifetime]" type="number" label="Session Lifetime (minutes)" :value="$settings['session_lifetime'] ?? '120'" min="0" max="10080" hint="Auto-logout users after this many minutes of inactivity. Set to 0 to disable auto-logout." placeholder="120" />
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