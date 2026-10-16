@extends('layouts.admin')
@section('title', 'Edit Service')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Service: {{ $service->title }}</h1>
    </div>

    <form method="POST" action="{{ route('admin.services.update', $service) }}" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\ServiceRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <x-form.input name="title" label="Title" required :value="$service->title" placeholder="e.g. Web Development" />
                <x-form.textarea name="description" label="Description" :rows="4" :value="$service->description" placeholder="Describe this service..." />
                <div class="grid grid-cols-2 gap-5">
                    <x-form.input name="icon" label="Icon URL (optional)" type="url" :value="$service->icon" placeholder="https://..." />
                    <x-form.input name="sort_order" label="Sort Order" type="number" :value="$service->sort_order" min="0" placeholder="0" />
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <span data-submit-label>Update Service</span>
            <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
        </button>
            <a href="{{ route('admin.services.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection