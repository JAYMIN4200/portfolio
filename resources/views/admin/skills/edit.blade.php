@extends('layouts.admin')

@section('title', 'Edit Skill')

@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Skill: {{ $skill->name }}</h1>
        <p class="text-slate-500 mt-1">Update the skill details below.</p>
    </div>

    <form method="POST" action="{{ route('admin.skills.update', $skill) }}" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\SkillRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <x-form.input name="name" label="Name" required placeholder="e.g. JavaScript" :value="$skill->name" />

                <div class="grid grid-cols-2 gap-5">
                    <x-form.input name="category" label="Category" required placeholder="e.g. frontend, backend, tools" :value="$skill->category" />

                    <x-form.range name="proficiency" label="Proficiency" required :value="$skill->proficiency" />
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <x-form.input type="url" name="icon" label="Icon URL (optional)" placeholder="https://..." :value="$skill->icon" />

                    <x-form.input type="number" name="sort_order" label="Sort Order" :value="$skill->sort_order" min="0" placeholder="0" />
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <span data-submit-label>Update Skill</span>
            <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
        </button>
            <a href="{{ route('admin.skills.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection