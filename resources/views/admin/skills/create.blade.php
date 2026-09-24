@extends('layouts.admin')

@section('title', isset($skill) ? 'Edit Skill' : 'Add Skill')

@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">{{ isset($skill) ? 'Edit Skill' : 'Add New Skill' }}</h1>
        <p class="text-slate-500 mt-1">{{ isset($skill) ? 'Update the skill details below.' : 'Add a new skill to your portfolio.' }}</p>
    </div>

    <form method="POST" action="{{ isset($skill) ? route('admin.skills.update', $skill) : route('admin.skills.store') }}" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\SkillRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf
        @if (isset($skill))
            @method('PUT')
        @endif

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $skill->name ?? '') }}" required
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('name') border-red-300 @enderror"
                           placeholder="e.g. JavaScript">
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Category <span class="text-red-500">*</span></label>
                        <input type="text" name="category" value="{{ old('category', $skill->category ?? 'general') }}" required
                               class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('category') border-red-300 @enderror"
                               placeholder="e.g. frontend, backend, tools">
                        <p class="text-xs text-slate-400 mt-1">Groups skills into sections</p>
                        @error('category') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Proficiency <span class="text-red-500">*</span></label>
                        <div class="flex items-center gap-3">
                            <input type="range" name="proficiency" min="0" max="100" value="{{ old('proficiency', $skill->proficiency ?? 50) }}"
                                   class="flex-1 h-2 rounded-full appearance-none bg-slate-200 accent-indigo-600"
                                   oninput="this.nextElementSibling.textContent = this.value + '%'">
                            <span class="text-sm font-medium text-slate-700 w-10">{{ old('proficiency', $skill->proficiency ?? 50) }}%</span>
                        </div>
                        @error('proficiency') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Icon URL (optional)</label>
                        <input type="url" name="icon" value="{{ old('icon', $skill->icon ?? '') }}"
                               class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                               placeholder="https://...">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ old('sort_order', $skill->sort_order ?? 0) }}" min="0" placeholder="0"
                               class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                <span data-submit-label>{{ isset($skill) ? 'Update Skill' : 'Create Skill' }}</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
            <a href="{{ route('admin.skills.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">
                Cancel
            </a>
        </div>
    </form>

@endsection