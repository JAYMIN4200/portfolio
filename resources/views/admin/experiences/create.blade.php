@extends('layouts.admin')
@section('title', isset($experience) ? 'Edit Experience' : 'Add Experience')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">{{ isset($experience) ? 'Edit Experience' : 'Add New Experience' }}</h1>
    </div>

    <form method="POST" action="{{ isset($experience) ? route('admin.experiences.update', $experience) : route('admin.experiences.store') }}" enctype="multipart/form-data" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\ExperienceRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf
        @if (isset($experience)) @method('PUT') @endif

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <div class="grid grid-cols-2 gap-5">
                    <x-form.input name="company" label="Company" required :value="$experience->company ?? ''" placeholder="e.g. Techmayntra IT Solutions" />
                    <x-form.input name="position" label="Position" required :value="$experience->position ?? ''" placeholder="e.g. Laravel Developer" />
                </div>

                <x-form.textarea name="description" label="Description" :rows="4" :value="$experience->description ?? ''" placeholder="Describe your role and achievements..." />

                <div class="grid grid-cols-3 gap-5">
                    <x-form.input name="start_date" type="date" label="Start Date" required :value="$experience->start_date ?? ''" />
                    <x-form.input name="end_date" type="date" label="End Date" :value="$experience->end_date ?? ''" />
                    <x-form.input name="location" label="Location" :value="$experience->location ?? ''" placeholder="City, Country" />
                </div>

                <x-form.input name="website" type="url" label="Company Website" :value="$experience->website ?? ''" placeholder="https://company.com" />

                <div class="grid grid-cols-3 gap-5">
                    <div class="flex items-end pb-2.5">
                        <x-form.checkbox name="is_current" label="Currently working here" :checked="old('is_current', $experience->is_current ?? false)" />
                    </div>
                    <x-form.file name="logo" label="Logo" accept="image/*" />
                    <x-form.input name="sort_order" type="number" label="Sort Order" :value="$experience->sort_order ?? 0" min="0" placeholder="0" />
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                <span data-submit-label>{{ isset($experience) ? 'Update Experience' : 'Create Experience' }}</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
            <a href="{{ route('admin.experiences.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection