@extends('layouts.admin')
@section('title', 'Add Task')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Add New Task</h1>
        <p class="text-slate-500 mt-1">Create a task to keep your work on track.</p>
    </div>

    <form method="POST" action="{{ route('admin.tasks.store') }}" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\TaskRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf

        @include('admin.tasks._form', ['task' => new \App\Models\Task(['priority' => 'medium', 'status' => 'pending'])])

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                <span data-submit-label>Save Task</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
            <a href="{{ route('admin.tasks.index') }}" class="px-4 py-2.5 rounded-lg text-sm font-medium text-slate-600 hover:text-slate-800">Cancel</a>
        </div>
    </form>

@endsection
