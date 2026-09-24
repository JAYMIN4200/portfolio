<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'subtitle' => null, 'align' => 'center', 'badge' => null]));

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

foreach (array_filter((['title', 'subtitle' => null, 'align' => 'center', 'badge' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="mb-12 <?php echo e($align === 'left' ? 'text-left' : 'text-center'); ?>" data-reveal="up">
    <?php if($badge): ?>
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-4">
            <?php echo e($badge); ?>

        </span>
    <?php endif; ?>
    <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight"><?php echo e($title); ?></h2>
    <?php if($subtitle): ?>
        <p class="mt-4 text-slate-400 text-lg max-w-2xl <?php echo e($align === 'center' ? 'mx-auto' : ''); ?>"><?php echo e($subtitle); ?></p>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\portfolio\resources\views/components/frontend/section-header.blade.php ENDPATH**/ ?>