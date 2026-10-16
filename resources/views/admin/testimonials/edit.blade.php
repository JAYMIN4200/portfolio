@extends('layouts.admin')
@section('title', 'Edit Testimonial')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Testimonial: {{ $testimonial->client_name }}</h1>
    </div>

    <form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}" enctype="multipart/form-data" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\TestimonialRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <x-form.input name="client_name" label="Client Name" required placeholder="e.g. Rohan Mehta" :value="$testimonial->client_name" />

                <div class="grid grid-cols-2 gap-5">
                    <x-form.input name="company" label="Company" placeholder="e.g. Techmayntra IT Solutions" :value="$testimonial->company" />
                    <x-form.input name="role" label="Role" placeholder="e.g. Project Manager" :value="$testimonial->role" />
                </div>

                <x-form.textarea name="content" label="Testimonial" required :rows="5" placeholder="What did they say about you?" :value="$testimonial->content" />

                <div class="grid grid-cols-3 gap-5">
                    <x-form.field label="Avatar" for="avatar">
                        <div class="mb-2">
                            <img src="{{ $testimonial->avatarUrl() }}" alt="{{ $testimonial->client_name }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                        </div>
                        <input type="file" name="avatar" id="avatar" accept="image/*" class="form-file">
                    </x-form.field>

                    <x-form.select name="rating" label="Rating" :value="$testimonial->rating">
                        @for ($i = 5; $i >= 1; $i--)
                            <option value="{{ $i }}" @selected(old('rating', $testimonial->rating) == $i)>{{ $i }} star{{ $i > 1 ? 's' : '' }}</option>
                        @endfor
                    </x-form.select>

                    <x-form.input type="number" name="sort_order" label="Sort Order" :value="$testimonial->sort_order" min="0" placeholder="0" />
                </div>

                <div class="flex items-center">
                    <x-form.checkbox name="is_visible" label="Visible on the website" :checked="old('is_visible', $testimonial->is_visible)" />
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                <span data-submit-label>Update Testimonial</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
            <a href="{{ route('admin.testimonials.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection