@php
    $statusStyles = [
        'pending' => 'bg-slate-100 text-slate-700 border-slate-200',
        'in_progress' => 'bg-blue-100 text-blue-700 border-blue-200',
        'done' => 'bg-green-100 text-green-700 border-green-200',
        'hold' => 'bg-amber-100 text-amber-700 border-amber-200',
    ];
    $priorityStyles = [
        'low' => 'bg-slate-100 text-slate-600',
        'medium' => 'bg-amber-100 text-amber-700',
        'high' => 'bg-red-100 text-red-700',
    ];
@endphp

<div data-ajax-content class="transition-opacity">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-600 uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-5 py-3 text-left font-semibold">Task</th>
                    <th class="px-5 py-3 text-left font-semibold">Priority</th>
                    <th class="px-5 py-3 text-left font-semibold">Status</th>
                    <th class="px-5 py-3 text-left font-semibold">Due Date</th>
                    <th class="px-5 py-3 text-right font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($tasks as $task)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-5 py-4">
                            <p class="font-medium text-slate-800">{{ $task->title }}</p>
                            <div class="mt-1 flex flex-wrap items-center gap-2">
                                @if ($task->category)
                                    <span class="rounded-full bg-indigo-50 px-2 py-0.5 text-xs font-medium text-indigo-700">{{ $task->category }}</span>
                                @endif
                                @if ($task->isOverdue())
                                    <span class="rounded-full bg-red-100 px-2 py-0.5 text-xs font-semibold text-red-700">Overdue</span>
                                @endif
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            <span class="rounded-full px-2 py-0.5 text-xs font-semibold {{ $priorityStyles[$task->priority] ?? 'bg-slate-100 text-slate-600' }}">{{ $task->priorityLabel() }}</span>
                        </td>
                        <td class="px-5 py-4">
                            <form method="POST" action="{{ route('admin.tasks.status', $task) }}">
                                @csrf
                                @method('PATCH')
                                <x-form.select name="status" size="sm" bare :value="$task->status" onchange="this.form.submit()"
                                    class="{{ $statusStyles[$task->status] ?? 'border-slate-200' }}">
                                    @foreach (\App\Models\Task::STATUSES as $value => $label)
                                        <option value="{{ $value }}" {{ $task->status === $value ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </x-form.select>
                            </form>
                        </td>
                        <td class="px-5 py-4 whitespace-nowrap">
                            @if ($task->due_date)
                                <span class="{{ $task->isOverdue() ? 'font-semibold text-red-600' : 'text-slate-500' }}">{{ $task->due_date->format('d M Y') }}</span>
                            @else
                                <span class="text-slate-400">&mdash;</span>
                            @endif
                        </td>
                        <td class="px-5 py-4 text-right">
                            <div class="inline-flex items-center gap-1">
                                <a href="{{ route('admin.tasks.edit', $task) }}" class="p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 transition-colors" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </a>
                                <form method="POST" action="{{ route('admin.tasks.destroy', $task) }}" data-confirm="Delete this task?" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <x-admin.empty-row :colspan="5" noun="tasks" route="admin.tasks.create" singular="task" />
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-5 py-4 border-t border-slate-200" data-ajax-pagination>
        <x-pagination :paginator="$tasks" />
    </div>
</div>
