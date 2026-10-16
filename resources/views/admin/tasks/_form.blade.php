@php
    $categoryOptions = array_combine(App\Models\Task::CATEGORIES, App\Models\Task::CATEGORIES);
    $priorityOptions = App\Models\Task::PRIORITIES;
    $statusOptions = App\Models\Task::STATUSES;
@endphp

<div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
    <div class="space-y-5">
        <x-form.input name="title" label="Task Name" required placeholder="e.g. Build the payments module" :value="$task->title ?? ''" />

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-form.select name="category" label="Category" :options="$categoryOptions" placeholder="Select category" :value="$task->category ?? ''" />

            <x-form.select name="priority" label="Priority" :options="$priorityOptions" required :value="$task->priority ?? 'medium'" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-form.select name="status" label="Status" :options="$statusOptions" required :value="$task->status ?? 'pending'" />

            <x-form.input type="date" name="due_date" label="Due Date" :value="$task->due_date?->format('Y-m-d') ?? ''" />
        </div>

        <x-form.textarea name="description" label="Description" :rows="4" placeholder="Optional details..." :value="$task->description ?? ''" />
    </div>
</div>
