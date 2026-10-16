@extends('layouts.admin')
@section('title', 'New Page')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Create a New Page</h1>
        <p class="text-slate-500 mt-1">Create static pages like Terms or Privacy policy.</p>
    </div>

    <form method="POST" action="{{ route('admin.pages.store') }}" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\PageRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <x-form.input name="title" label="Title" required placeholder="e.g. Terms & Conditions" />

                <x-form.input name="slug" label="Slug" required placeholder="e.g. terms" hint="The URL will be /pages/&lt;slug&gt;" />

                <x-form.textarea name="content" label="Content" :rows="12" required placeholder="Your page content (plain text with blank lines for paragraphs)..." />

                <div class="flex items-center">
                    <x-form.checkbox name="is_published" label="Published on the website" :checked="old('is_published', true)" />
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                <span data-submit-label>Create Page</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
            <a href="{{ route('admin.pages.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection