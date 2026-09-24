@extends('layouts.admin')
@section('title', 'Add Project')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Add New Project</h1>
    </div>

    <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\ProjectRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title') }}" required placeholder="e.g. Portfolio Website" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('title') border-red-300 @enderror">
                    @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Slug</label>
                    <input type="text" name="slug" value="{{ old('slug') }}" placeholder="Auto-generated from title if left empty" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('slug') border-red-300 @enderror">
                    @error('slug') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Description <span class="text-red-500">*</span></label>
                    <input type="text" name="description" value="{{ old('description') }}" required placeholder="Short project description" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('description') border-red-300 @enderror">
                    @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Long Description</label>
                    <textarea name="long_description" rows="6" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none @error('long_description') border-red-300 @enderror" placeholder="Detailed project description...">{{ old('long_description') }}</textarea>
                    @error('long_description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Image</label>
                    <input type="file" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    @error('image') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Technologies</label>
                    <input type="text" id="technologies_input" value="{{ old('technologies') ? (is_array(old('technologies')) ? implode(', ', old('technologies')) : old('technologies')) : '' }}" placeholder="Laravel, Vue.js, Tailwind CSS, MySQL" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('technologies') border-red-300 @enderror">
                    <div id="technologies_hidden"></div>
                    <p class="text-xs text-slate-400 mt-1">Comma-separated list of technologies used.</p>
                    @error('technologies') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Live URL</label>
                        <input type="url" name="live_url" value="{{ old('live_url') }}" placeholder="https://example.com" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('live_url') border-red-300 @enderror">
                        @error('live_url') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">GitHub URL</label>
                        <input type="url" name="github_url" value="{{ old('github_url') }}" placeholder="https://github.com/user/repo" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('github_url') border-red-300 @enderror">
                        @error('github_url') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" min="0" placeholder="0" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    </div>
                    <div class="flex items-end pb-2.5">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                            <span class="text-sm text-slate-700 font-medium">Featured project</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <span data-submit-label>Create Project</span>
            <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
        </button>
            <a href="{{ route('admin.projects.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('form[action$="/admin/projects"]');
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
