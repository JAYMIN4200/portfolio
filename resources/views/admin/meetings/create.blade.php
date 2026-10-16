@extends('layouts.admin')
@section('title', 'Add Meeting')
@section('content')

    @php $statuses = App\Models\Meeting::STATUSES; @endphp

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Add New Meeting</h1>
        <p class="text-slate-500 mt-1">Schedule a meeting on your own calendar.</p>
    </div>

    <form method="POST" action="{{ route('admin.meetings.store') }}" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\AdminMeetingRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <x-form.input name="name" label="Name" required placeholder="Contact name" />
                    <x-form.input type="email" name="email" label="Email" required placeholder="you@example.com" />
                    <x-form.input name="phone" label="Phone" placeholder="e.g. +91 98765 43210" />
                    <x-form.input name="company" label="Company" placeholder="Optional" />
                    <x-form.input type="date" name="meeting_date" label="Date" required />
                    <div class="grid grid-cols-2 gap-5">
                        <x-form.input type="time" name="meeting_time" label="Time" />
                        <x-form.input type="number" name="duration" label="Duration (min)" min="5" max="480" placeholder="30" />
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <x-form.input name="topic" label="Topic" placeholder="What will be discussed?" />

                    <x-form.select name="status" label="Status" required :value="'pending'">
                        @foreach ($statuses as $status)
                            <option value="{{ $status }}" @selected(old('status', 'pending') === $status)>{{ ucfirst($status) }}</option>
                        @endforeach
                    </x-form.select>
                </div>

                <x-form.textarea name="notes" label="Notes" :rows="3" placeholder="Optional details..." />
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                <span data-submit-label>Add Meeting</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
            <a href="{{ route('admin.meetings.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection