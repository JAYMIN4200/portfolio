@extends('layouts.admin')
@section('title', 'Edit Project')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Project: {{ $project->title }}</h1>
    </div>

    <form id="project_form" method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\ProjectRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <x-form.input name="title" label="Title" required :value="$project->title" placeholder="e.g. Portfolio Website" />

                <x-form.input name="slug" label="Slug" :value="$project->slug" placeholder="e.g. portfolio-website" />

                <x-form.input name="description" label="Description" required :value="$project->description" placeholder="Short project description" />

                <x-form.textarea name="long_description" label="Long Description" :rows="6" :value="$project->long_description" placeholder="Detailed project description..." />

                <x-form.field label="Image" for="image" name="image">
                    <div class="mb-2">
                        <img src="{{ $project->imageUrl() }}" alt="{{ $project->title }}" class="w-24 h-18 rounded-lg object-cover border border-slate-200">
                    </div>
                    <input type="file" name="image" id="image" accept="image/*" class="form-file">
                </x-form.field>

                <x-form.field name="technologies" label="Technologies" for="technologies_input" hint="Comma-separated list of technologies used.">
                    <input type="text" id="technologies_input" value="{{ old('technologies') ? (is_array(old('technologies')) ? implode(', ', old('technologies')) : old('technologies')) : (is_array($project->technologies) ? implode(', ', $project->technologies) : $project->technologies) }}" placeholder="Laravel, Vue.js, Tailwind CSS, MySQL" class="form-input">
                    <div id="technologies_hidden"></div>
                </x-form.field>

                <div class="grid grid-cols-2 gap-5">
                    <x-form.input name="live_url" label="Live URL" type="url" :value="$project->live_url" placeholder="https://example.com" />
                    <x-form.input name="github_url" label="GitHub URL" type="url" :value="$project->github_url" placeholder="https://github.com/user/repo" />
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <x-form.input name="sort_order" label="Sort Order" type="number" :value="$project->sort_order" min="0" placeholder="0" />
                    <div class="flex items-end pb-2.5">
                        <x-form.checkbox name="is_featured" label="Featured project" :checked="old('is_featured', $project->is_featured)" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <span data-submit-label>Update Project</span>
            <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
        </button>
            <a href="{{ route('admin.projects.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('project_form');
            const input = document.getElementById('technologies_input');
            const hiddenContainer = document.getElementById('technologies_hidden');

            form?.addEventListener('submit', () => {
                hiddenContainer.innerHTML = '';
                (input.value.split(',').map(t => t.trim()).filter(Boolean)).forEach(tech => {
                    const hidden = document.createElement('input');
                    hidden.type = 'hidden';
                    hidden.name = 'technologies[]';
                    hidden.value = tech;
                    hiddenContainer.appendChild(hidden);
                });
            });
        });
    </script>
@endpush
