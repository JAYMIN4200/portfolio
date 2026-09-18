<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php if (! empty(trim($__env->yieldContent('title')))): ?><?php echo $__env->yieldContent('title'); ?> | <?php endif; ?><?php echo e($settings['site_title'] ?? config('app.name')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', $settings['site_description'] ?? ''); ?>">
    <meta name="keywords" content="<?php echo e($settings['meta_keywords'] ?? ''); ?>">
    <meta name="author" content="<?php echo e($settings['site_title'] ?? config('app.name')); ?>">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo e($settings['site_title'] ?? config('app.name')); ?>">
    <meta property="og:title" content="<?php if (! empty(trim($__env->yieldContent('title')))): ?><?php echo $__env->yieldContent('title'); ?> | <?php endif; ?><?php echo e($settings['site_title'] ?? config('app.name')); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', $settings['site_description'] ?? ''); ?>">

    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">

    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128187;</text></svg>">

    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-slate-950 text-slate-300 antialiased min-h-screen flex flex-col">

    <?php if (isset($component)) { $__componentOriginal5fb469b9da69dc30a4591744f57abd9f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5fb469b9da69dc30a4591744f57abd9f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.navbar','data' => ['settings' => $settings]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['settings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($settings)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5fb469b9da69dc30a4591744f57abd9f)): ?>
<?php $attributes = $__attributesOriginal5fb469b9da69dc30a4591744f57abd9f; ?>
<?php unset($__attributesOriginal5fb469b9da69dc30a4591744f57abd9f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5fb469b9da69dc30a4591744f57abd9f)): ?>
<?php $component = $__componentOriginal5fb469b9da69dc30a4591744f57abd9f; ?>
<?php unset($__componentOriginal5fb469b9da69dc30a4591744f57abd9f); ?>
<?php endif; ?>

    <main class="flex-1">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php if (isset($component)) { $__componentOriginalbf18abedf5585b715c19d869055fa37a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf18abedf5585b715c19d869055fa37a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.footer','data' => ['settings' => $settings]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['settings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($settings)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbf18abedf5585b715c19d869055fa37a)): ?>
<?php $attributes = $__attributesOriginalbf18abedf5585b715c19d869055fa37a; ?>
<?php unset($__attributesOriginalbf18abedf5585b715c19d869055fa37a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf18abedf5585b715c19d869055fa37a)): ?>
<?php $component = $__componentOriginalbf18abedf5585b715c19d869055fa37a; ?>
<?php unset($__componentOriginalbf18abedf5585b715c19d869055fa37a); ?>
<?php endif; ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>