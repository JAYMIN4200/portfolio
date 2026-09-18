<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('meta_description', 'Browse my portfolio of projects, including web applications, websites and more.'); ?>

<?php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords']);
?>

<?php $__env->startSection('content'); ?>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-16">
        <div class="text-center mb-16">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-4">Portfolio</span>
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">My Projects</h1>
            <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto">A collection of projects I've built, ranging from web applications to open source tools.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if (isset($component)) { $__componentOriginal5350f5463dec7cd5c4fb8eede3d4053a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5350f5463dec7cd5c4fb8eede3d4053a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.project-card','data' => ['project' => $project]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.project-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['project' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5350f5463dec7cd5c4fb8eede3d4053a)): ?>
<?php $attributes = $__attributesOriginal5350f5463dec7cd5c4fb8eede3d4053a; ?>
<?php unset($__attributesOriginal5350f5463dec7cd5c4fb8eede3d4053a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5350f5463dec7cd5c4fb8eede3d4053a)): ?>
<?php $component = $__componentOriginal5350f5463dec7cd5c4fb8eede3d4053a; ?>
<?php unset($__componentOriginal5350f5463dec7cd5c4fb8eede3d4053a); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-full text-center py-20">
                    <p class="text-slate-400">No projects to display yet. Check back soon!</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="mt-12">
            <?php echo e($projects->links()); ?>

        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/pages/projects/index.blade.php ENDPATH**/ ?>