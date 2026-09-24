<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['service']));

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

foreach (array_filter((['service']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="glass-card rounded-xl p-6 h-full" data-reveal="up">
    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/25 mb-4">
        <?php if($service->icon): ?>
            <img src="<?php echo e($service->icon); ?>" alt="<?php echo e($service->title); ?>" class="w-6 h-6 object-contain">
        <?php else: ?>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        <?php endif; ?>
    </div>
    <h3 class="text-white font-semibold text-lg mb-2"><?php echo e($service->title); ?></h3>
    <p class="text-slate-400 text-sm leading-relaxed"><?php echo e($service->description); ?></p>
</div><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/components/frontend/service-card.blade.php ENDPATH**/ ?>