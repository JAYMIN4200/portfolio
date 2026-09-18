<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['dark' => true]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['dark' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $profile = App\Models\Profile::with('user')->first();
?>

<div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
    <div class="lg:col-span-2">
        <h2 class="text-3xl font-bold text-white tracking-tight mb-4">Let's work together</h2>
        <p class="text-slate-400 mb-8">
            Have a project in mind or want to collaborate? Send me a message and I'll get back to you as soon as possible.
        </p>

        <div class="space-y-4">
            <?php if($profile): ?>
                <?php if($profile->user->email): ?>
                    <div class="flex items-center gap-4 glass-card rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary-500/10 border border-primary-500/20 flex items-center justify-center text-primary-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 uppercase tracking-wider">Email</p>
                            <a href="mailto:<?php echo e($profile->user->email); ?>" class="text-white font-medium hover:text-primary-300 transition-colors break-all"><?php echo e($profile->user->email); ?></a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($profile->phone): ?>
                    <div class="flex items-center gap-4 glass-card rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary-500/10 border border-primary-500/20 flex items-center justify-center text-primary-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 uppercase tracking-wider">Phone</p>
                            <a href="tel:<?php echo e($profile->phone); ?>" class="text-white font-medium hover:text-primary-300 transition-colors"><?php echo e($profile->phone); ?></a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($profile->location): ?>
                    <div class="flex items-center gap-4 glass-card rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary-500/10 border border-primary-500/20 flex items-center justify-center text-primary-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 uppercase tracking-wider">Location</p>
                            <p class="text-white font-medium"><?php echo e($profile->location); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="lg:col-span-3 glass-card rounded-2xl p-6 sm:p-8">
        <?php if(session('success')): ?>
            <div class="mb-6 p-4 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 flex items-center gap-3">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-sm font-medium"><?php echo e(session('success')); ?></span>
            </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="mb-6 p-4 rounded-lg bg-red-500/10 border border-red-500/20 text-red-400 flex items-center gap-3">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-sm font-medium">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?><?php if(!$loop->last): ?> <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </span>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('contact.send')); ?>" method="POST" class="space-y-5" data-contact-form>
            <?php echo csrf_field(); ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Name <span class="text-red-400">*</span></label>
                    <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required
                           class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="Your name">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email <span class="text-red-400">*</span></label>
                    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required
                           class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="you@example.com">
                </div>
            </div>
            <div>
                <label for="subject" class="block text-sm font-medium text-slate-300 mb-2">Subject</label>
                <input type="text" id="subject" name="subject" value="<?php echo e(old('subject')); ?>"
                       class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                       placeholder="What's this about?">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-slate-300 mb-2">Message <span class="text-red-400">*</span></label>
                <textarea id="message" name="message" rows="5" required
                          class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none"
                          placeholder="Tell me about your project..."><?php echo e(old('message')); ?></textarea>
            </div>
            <div>
                <button type="submit" data-contact-submit class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.01] transition-all disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    <span data-contact-submit-text>Send Message</span>
                    <svg class="w-5 h-5 hidden animate-spin" data-contact-spinner fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                </button>
            </div>
        </form>
    </div>
</div>

<?php if(!$dark): ?>
<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('[data-contact-form]');
        if (!form) return;
        const submitBtn = form.querySelector('[data-contact-submit]');
        const submitText = form.querySelector('[data-contact-submit-text]');
        const spinner = form.querySelector('[data-contact-spinner]');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            submitBtn.disabled = true;
            submitText.textContent = 'Sending...';
            spinner.classList.remove('hidden');

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
                    body: new FormData(form)
                });
                const data = await response.json();
                if (data.success) {
                    form.reset();
                    const existing = form.querySelector('[data-form-success]');
                    if (existing) existing.remove();
                    const div = document.createElement('div');
                    div.dataset.formSuccess = '';
                    div.className = 'mb-6 p-4 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 flex items-center gap-3';
                    div.textContent = data.message;
                    form.prepend(div);
                } else if (data.errors) {
                    alert(Object.values(data.errors).flat().join('\n'));
                }
            } catch (err) {
                alert('Something went wrong. Please try again.');
            } finally {
                submitBtn.disabled = false;
                submitText.textContent = 'Send Message';
                spinner.classList.add('hidden');
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/components/frontend/contact-form.blade.php ENDPATH**/ ?>