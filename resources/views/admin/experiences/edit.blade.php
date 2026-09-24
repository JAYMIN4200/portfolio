@extends('layouts.admin')
@section('title', 'Edit Experience')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Experience: {{ $experience->company }}</h1>
    </div>

    <form method="POST" action="{{ route('admin.experiences.update', $experience) }}" enctype="multipart/form-data" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\ExperienceRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Company <span class="text-red-500">*</span></label>
                        <input type="text" name="company" value="{{ old('company', $experience->company) }}" required placeholder="e.g. Techmayntra IT Solutions" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('company') border-red-300 @enderror">
                        @error('company') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Position <span class="text-red-500">*</span></label>
                        <input type="text" name="position" value="{{ old('position', $experience->position) }}" required placeholder="e.g. Laravel Developer" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('position') border-red-300 @enderror">
                        @error('position') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Description</label>
                    <textarea name="description" rows="4" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none" placeholder="Describe your role and achievements...">{{ old('description', $experience->description) }}</textarea>
                </div>

                <div class="grid grid-cols-3 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Start Date <span class="text-red-500">*</span></label>
                        <input type="date" name="start_date" value="{{ old('start_date', $experience->start_date?->format('Y-m-d')) }}" required class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('start_date') border-red-300 @enderror">
                        @error('start_date') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">End Date</label>
                        <input type="date" name="end_date" value="{{ old('end_date', $experience->end_date?->format('Y-m-d')) }}" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('end_date') border-red-300 @enderror">
                        @error('end_date') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Location</label>
                        <input type="text" name="location" value="{{ old('location', $experience->location) }}" placeholder="City, Country" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Company Website</label>
                    <input type="url" name="website" value="{{ old('website', $experience->website) }}" placeholder="https://company.com" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('website') border-red-300 @enderror">
                    @error('website') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-3 gap-5">
                    <div class="flex items-end pb-2.5">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="is_current" value="1" {{ old('is_current', $experience->is_current) ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                            <span class="text-sm text-slate-700 font-medium">Currently working here</span>
                        </label>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Logo</label>
                        @if ($experience->logo)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $experience->logo) }}" alt="Logo" class="w-10 h-10 rounded object-contain border border-slate-200">
                            </div>
                        @endif
                        <input type="file" name="logo" accept="image/*" class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ old('sort_order', $experience->sort_order) }}" min="0" placeholder="0" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <span data-submit-label>Update Experience</span>
            <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
        </button>
            <a href="{{ route('admin.experiences.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection