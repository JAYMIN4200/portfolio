@extends('layouts.admin')
@section('title', isset($experience) ? 'Edit Experience' : 'Add Experience')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">{{ isset($experience) ? 'Edit Experience' : 'Add New Experience' }}</h1>
    </div>

    <form method="POST" action="{{ isset($experience) ? route('admin.experiences.update', $experience) : route('admin.experiences.store') }}" enctype="multipart/form-data" class="max-w-3xl">
        @csrf
        @if (isset($experience)) @method('PUT') @endif

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Company <span class="text-red-500">*</span></label>
                        <input type="text" name="company" value="{{ old('company', $experience->company ?? '') }}" required class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('company') border-red-300 @enderror">
                        @error('company') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Position <span class="text-red-500">*</span></label>
                        <input type="text" name="position" value="{{ old('position', $experience->position ?? '') }}" required class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('position') border-red-300 @enderror">
                        @error('position') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Description</label>
                    <textarea name="description" rows="4" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none" placeholder="Describe your role and achievements...">{{ old('description', $experience->description ?? '') }}</textarea>
                </div>

                <div class="grid grid-cols-3 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Start Date <span class="text-red-500">*</span></label>
                        <input type="date" name="start_date" value="{{ old('start_date', $experience->start_date ?? '') }}" required class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('start_date') border-red-300 @enderror">
                        @error('start_date') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">End Date</label>
                        <input type="date" name="end_date" value="{{ old('end_date', $experience->end_date ?? '') }}" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('end_date') border-red-300 @enderror">
                        @error('end_date') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Location</label>
                        <input type="text" name="location" value="{{ old('location', $experience->location ?? '') }}" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all" placeholder="City, Country">
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-5">
                    <div class="flex items-end pb-2.5">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="is_current" value="1" {{ old('is_current', $experience->is_current ?? false) ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                            <span class="text-sm text-slate-700 font-medium">Currently working here</span>
                        </label>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Logo</label>
                        <input type="file" name="logo" accept="image/*" class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ old('sort_order', $experience->sort_order ?? 0) }}" min="0" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                {{ isset($experience) ? 'Update Experience' : 'Create Experience' }}
            </button>
            <a href="{{ route('admin.experiences.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection