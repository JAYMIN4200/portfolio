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
                <x-form.input name="client_name" label="Client Name" required placeholder="e.g. Rohan Mehta" />

                <div class="grid grid-cols-2 gap-5">
                    <x-form.input name="company" label="Company" placeholder="e.g. Techmayntra IT Solutions" />
                    <x-form.input name="role" label="Role" placeholder="e.g. Project Manager" />
                </div>

                <x-form.textarea name="content" label="Testimonial" required :rows="5" placeholder="What did they say about you?" />

                <div class="grid grid-cols-3 gap-5">
                    <x-form.file name="avatar" label="Avatar" accept="image/*" />

                    <x-form.select name="rating" label="Rating" :value="5">
                        @for ($i = 5; $i >= 1; $i--)
                            <option value="{{ $i }}" @selected(old('rating', 5) == $i)>{{ $i }} star{{ $i > 1 ? 's' : '' }}</option>
                        @endfor
                    </x-form.select>

                    <x-form.input type="number" name="sort_order" label="Sort Order" :value="0" min="0" placeholder="0" />
                </div>

                <div class="flex items-center">
                    <x-form.checkbox name="is_visible" label="Visible on the website" :checked="old('is_visible', true)" />
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