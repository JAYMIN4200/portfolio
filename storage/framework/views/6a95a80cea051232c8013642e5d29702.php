<?php $__env->startSection('title', 'Messages'); ?>
<?php $__env->startSection('content'); ?>

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Messages</h1>
        <p class="text-slate-500 mt-1">Manage messages from the contact form.</p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200">
        <div class="p-5 border-b border-slate-200">
            <form method="GET" class="flex gap-2 flex-wrap">
                <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Search name, email or subject..." class="flex-1 min-w-[200px] px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                <select name="status" class="px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    <option value="">All messages</option>
                    <option value="unread" <?php echo e(request('status') === 'unread' ? 'selected' : ''); ?>>Unread only</option>
                </select>
                <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
                <?php if(request('search') || request('status')): ?>
                    <a href="<?php echo e(route('admin.messages.index')); ?>" class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a>
                <?php endif; ?>
            </form>
        </div>

        <div class="divide-y divide-slate-100">
            <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="px-5 py-4 flex items-start gap-4 hover:bg-slate-50/50 transition-colors <?php echo e($msg->is_read ? 'opacity-70' : ''); ?>">
                    <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-semibold text-sm shrink-0">
                        <?php echo e(strtoupper(substr($msg->name, 0, 1))); ?>

                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <h3 class="text-sm font-semibold text-slate-800"><?php echo e($msg->name); ?></h3>
                            <?php if (! ($msg->is_read)): ?>
                                <span class="inline-flex items-center px-1.5 py-0.5 rounded-full text-[10px] font-bold bg-indigo-500 text-white">New</span>
                            <?php endif; ?>
                            <span class="text-xs text-slate-400 ml-auto shrink-0"><?php echo e($msg->created_at->diffForHumans()); ?></span>
                        </div>
                        <p class="text-xs text-slate-500 mb-1"><?php echo e($msg->email); ?><?php echo e($msg->subject ? " — {$msg->subject}" : ''); ?></p>
                        <p class="text-sm text-slate-600 line-clamp-2"><?php echo e(Str::limit($msg->message, 150)); ?></p>
                    </div>
                    <div class="flex items-center gap-1 shrink-0">
                        <button type="button" onclick="toggleRead(<?php echo e($msg->id); ?>, this)" class="p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 transition-colors" title="<?php echo e($msg->is_read ? 'Mark unread' : 'Mark read'); ?>">
                            <?php if($msg->is_read): ?>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <?php else: ?>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 19l6.75 4.5M21 19l-6.75 4.5"/></svg>
                            <?php endif; ?>
                        </button>
                        <a href="<?php echo e(route('admin.messages.show', $msg)); ?>" class="p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 transition-colors" title="View">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </a>
                        <form method="POST" action="<?php echo e(route('admin.messages.destroy', $msg)); ?>" data-confirm="Delete this message?" data-delete-ajax class="inline">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="px-5 py-12 text-center text-slate-400">No messages found.</div>
            <?php endif; ?>
        </div>

        <div class="px-5 py-4 border-t border-slate-200">
            <?php echo e($messages->withQueryString()->links()); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    async function toggleRead(id, btn) {
        const response = await fetch(`/admin/messages/${id}/toggle-read`, {
            method: 'PATCH',
            headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
        });
        const data = await response.json();
        location.reload();
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-delete-ajax]').forEach(form => {
            form.addEventListener('submit', async (e) => {
                if (!confirm(form.dataset.confirm)) {
                    e.preventDefault();
                    return;
                }
                e.preventDefault();
                const response = await fetch(form.action, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                });
                if (response.ok) {
                    form.closest('.flex')?.remove();
                    if (!document.querySelector('[data-delete-ajax]')) location.reload();
                }
            });
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/admin/messages/index.blade.php ENDPATH**/ ?>