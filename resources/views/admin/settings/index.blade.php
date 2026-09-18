@extends('layouts.admin')
@section('title', 'Settings')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Website Settings</h1>
        <p class="text-slate-500 mt-1">Configure your portfolio website's appearance and metadata.</p>
    </div>

    <form method="POST" action="{{ route('admin.settings.update') }}" class="max-w-3xl">
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

        <button type="submit" class="px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">Save Settings</button>
    </form>

@endsection