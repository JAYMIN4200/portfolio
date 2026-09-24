<!DOCTYPE html>
<html lang="en" class="scroll-smooth" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <script>
        (function () {
            var stored = null;
            try { stored = localStorage.getItem('frontend-theme'); } catch (e) {}
            document.documentElement.dataset.theme = stored === 'light' ? 'light' : 'dark';
        })();
    </script>

    <?php if(!empty($settings['favicon'])): ?>
        <link rel="icon" type="image/png" href="<?php echo e(asset('storage/' . $settings['favicon'])); ?>">
    <?php else: ?>
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128187;</text></svg>">
    <?php endif; ?>

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

    <button type="button" data-scroll-top data-scroll-top-target aria-label="Back to top"
            class="fixed bottom-6 right-6 z-50 w-11 h-11 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 opacity-0 pointer-events-none translate-y-3 transition-all duration-300 hover:scale-105 flex items-center justify-center">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggle = document.querySelector('[data-theme-toggle]');
            const applyThemeUI = () => {
                const theme = document.documentElement.dataset.theme;
                document.querySelectorAll('[data-icon-sun]').forEach(el => el.classList.toggle('hidden', theme === 'dark'));
                document.querySelectorAll('[data-icon-moon]').forEach(el => el.classList.toggle('hidden', theme === 'light'));
            };
            if (themeToggle) {
                themeToggle.addEventListener('click', () => {
                    const next = document.documentElement.dataset.theme === 'light' ? 'dark' : 'light';
                    document.documentElement.dataset.theme = next;
                    try { localStorage.setItem('frontend-theme', next); } catch (e) {}
                    applyThemeUI();
                });
            }
            applyThemeUI();

            const scrollTop = document.querySelector('[data-scroll-top]');
            if (scrollTop) {
                const toggle = () => {
                    const show = window.scrollY > 400;
                    scrollTop.classList.toggle('opacity-0', !show);
                    scrollTop.classList.toggle('pointer-events-none', !show);
                    scrollTop.classList.toggle('translate-y-3', !show);
                };
                window.addEventListener('scroll', () => { requestAnimationFrame(toggle); }, { passive: true });
                scrollTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
                toggle();
            }

            document.querySelectorAll('[data-alert]').forEach(el => {
                setTimeout(() => {
                    el.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(-4px)';
                    setTimeout(() => el.remove(), 400);
                }, 3000);
            });
            document.querySelectorAll('[data-alert-close]').forEach(btn => {
                btn.addEventListener('click', () => btn.closest('[data-alert]')?.remove());
            });
        });
    </script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <?php echo $__env->make('components.inline-validation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>