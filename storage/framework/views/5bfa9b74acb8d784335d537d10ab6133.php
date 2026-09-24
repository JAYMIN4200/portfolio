<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['project']));

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

foreach (array_filter((['project']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<article class="glass-card rounded-xl overflow-hidden group flex flex-col h-full" data-reveal="up">
    <div class="relative overflow-hidden aspect-video">
        <?php if($project->image): ?>
            <img src="<?php echo e(asset('storage/' . $project->image)); ?>" alt="<?php echo e($project->title); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
        <?php else: ?>
            <div class="w-full h-full bg-gradient-to-br from-slate-800 via-slate-900 to-primary-900/50 flex items-center justify-center">
                <svg class="w-16 h-16 text-white/10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
            </div>
        <?php endif; ?>

        <?php if($project->is_featured): ?>
            <span class="absolute top-3 left-3 inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-400 text-slate-900 shadow-lg">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Featured
            </span>
        <?php endif; ?>

        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-5 gap-3">
            <?php if($project->live_url): ?>
                <a href="<?php echo e($project->live_url); ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-white text-slate-900 text-sm font-semibold hover:bg-slate-200 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Live Demo
                </a>
            <?php endif; ?>
            <?php if($project->github_url): ?>
                <a href="<?php echo e($project->github_url); ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-slate-900/90 text-white text-sm font-semibold hover:bg-slate-800 transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                    Code
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="p-6 flex flex-col flex-1">
        <h3 class="text-white font-semibold text-lg mb-2">
            <a href="<?php echo e(route('projects.show', $project)); ?>" class="hover:text-primary-300 transition-colors"><?php echo e($project->title); ?></a>
        </h3>
        <p class="text-slate-400 text-sm leading-relaxed flex-1"><?php echo e($project->description); ?></p>

        <?php if($project->technologies): ?>
            <div class="flex flex-wrap gap-2 mt-4">
                <?php $__currentLoopData = collect($project->technologies)->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-primary-500/10 text-primary-400 border border-primary-500/20"><?php echo e($tech); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($project->technologies) > 4): ?>
                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-white/5 text-slate-400">+<?php echo e(count($project->technologies) - 4); ?> more</span>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <a href="<?php echo e(route('projects.show', $project)); ?>" class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-primary-400 hover:text-primary-300 transition-colors">
            View Details
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
        </a>
    </div>
</article><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/components/frontend/project-card.blade.php ENDPATH**/ ?>