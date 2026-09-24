<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['skill']));

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

foreach (array_filter((['skill']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="glass-card rounded-xl p-5" data-reveal="up">
    <div class="flex items-center justify-between mb-3">
        <div class="flex items-center gap-3">
            <?php if($skill->icon): ?>
                <img src="<?php echo e($skill->icon); ?>" alt="<?php echo e($skill->name); ?>" class="w-8 h-8 object-contain" loading="lazy">
            <?php else: ?>
                <div class="w-8 h-8 rounded-lg bg-primary-500/10 border border-primary-500/20 flex items-center justify-center text-primary-400 font-bold text-sm">
                    <?php echo e(strtoupper(substr($skill->name, 0, 1))); ?>

                </div>
            <?php endif; ?>
            <h4 class="text-white font-semibold"><?php echo e($skill->name); ?></h4>
        </div>
        <span class="text-sm font-semibold text-primary-400"><?php echo e($skill->proficiency); ?>%</span>
    </div>
    <div class="h-2 rounded-full bg-white/5 overflow-hidden">
        <div class="h-full rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 transition-all duration-1000"
             style="width: <?php echo e($skill->proficiency); ?>%"></div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/components/frontend/skill-bar.blade.php ENDPATH**/ ?>