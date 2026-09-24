@extends('layouts.admin')
@section('title', 'Add Testimonial')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Add New Testimonial</h1>
        <p class="text-slate-500 mt-1">Share praise from a client or colleague.</p>
    </div>

    <form method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\TestimonialRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Client Name <span class="text-red-500">*</span></label>
                    <input type="text" name="client_name" value="{{ old('client_name') }}" required placeholder="e.g. Rohan Mehta" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('client_name') border-red-300 @enderror">
                    @error('client_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Company</label>
                        <input type="text" name="company" value="{{ old('company') }}" placeholder="e.g. Techmayntra IT Solutions" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Role</label>
                        <input type="text" name="role" value="{{ old('role') }}" placeholder="e.g. Project Manager" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Testimonial <span class="text-red-500">*</span></label>
                    <textarea name="content" rows="5" required class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none @error('content') border-red-300 @enderror" placeholder="What did they say about you?">{{ old('content') }}</textarea>
                    @error('content') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-3 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Avatar</label>
                        <input type="file" name="avatar" accept="image/*" class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Rating</label>
                        <div class="relative">
                            <select name="rating" class="w-full px-3 py-2.5 pr-10 rounded-lg border border-slate-300 text-slate-800 appearance-none bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                                @for ($i = 5; $i >= 1; $i--)
                                    <option value="{{ $i }}" {{ old('rating', 5) == $i ? 'selected' : '' }}>{{ $i }} star{{ $i > 1 ? 's' : '' }}</option>
                                @endfor
                            </select>
                            <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" min="0" placeholder="0" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    </div>
                </div>

                <div class="flex items-center">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="is_visible" value="1" {{ old('is_visible', true) ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span class="text-sm text-slate-700 font-medium">Visible on the website</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                <span data-submit-label>Create Testimonial</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
            <a href="{{ route('admin.testimonials.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection