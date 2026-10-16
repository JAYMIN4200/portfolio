@php
    $categoryOptions = array_combine(App\Models\Task::CATEGORIES, App\Models\Task::CATEGORIES);
    $priorityOptions = App\Models\Task::PRIORITIES;
    $statusOptions = App\Models\Task::STATUSES;
@endphp

<div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
    <div class="space-y-5">
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Task Name <span class="text-red-500">*</span></label>
            <input type="text" name="title" value="{{ old('title', $task->title ?? '') }}" required placeholder="e.g. Build the payments module"
                   class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Category</label>
                <div class="relative">
                    <select name="category" class="w-full px-3 py-2.5 pr-10 rounded-lg border border-slate-300 text-slate-800 appearance-none bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                        <option value="">Select category</option>
                        @foreach ($categoryOptions as $value => $label)
                            <option value="{{ $value }}" {{ old('category', $task->category ?? '') === $value ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Priority <span class="text-red-500">*</span></label>
                <div class="relative">
                    <select name="priority" class="w-full px-3 py-2.5 pr-10 rounded-lg border border-slate-300 text-slate-800 appearance-none bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                        @foreach ($priorityOptions as $value => $label)
                            <option value="{{ $value }}" {{ old('priority', $task->priority ?? 'medium') === $value ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Status <span class="text-red-500">*</span></label>
                <div class="relative">
                    <select name="status" class="w-full px-3 py-2.5 pr-10 rounded-lg border border-slate-300 text-slate-800 appearance-none bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                        @foreach ($statusOptions as $value => $label)
                            <option value="{{ $value }}" {{ old('status', $task->status ?? 'pending') === $value ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Due Date</label>
                <input type="date" name="due_date" value="{{ old('due_date', isset($task) && $task->due_date ? $task->due_date->format('Y-m-d') : '') }}"
                       class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Description</label>
            <textarea name="description" rows="4" placeholder="Optional details..."
                      class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none">{{ old('description', $task->description ?? '') }}</textarea>
        </div>
    </div>
</div>
