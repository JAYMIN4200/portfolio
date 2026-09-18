<?php $__env->startSection('title', 'Contact'); ?>

<?php $__env->startSection('meta_description', 'Get in touch with me about projects, collaborations, or anything else.'); ?>

<?php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords']);
?>

<?php $__env->startSection('content'); ?>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-20">
        <div class="text-center mb-16">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-4">Contact</span>
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">Let's talk</h1>
            <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto">Whether you have a project in mind, a question, or just want to say hi, I'd love to hear from you.</p>
        </div>

        <?php if (isset($component)) { $__componentOriginalbf0e4f7e0721d63942d4467256ebf567 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf0e4f7e0721d63942d4467256ebf567 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.contact-form','data' => ['dark' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.contact-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['dark' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbf0e4f7e0721d63942d4467256ebf567)): ?>
<?php $attributes = $__attributesOriginalbf0e4f7e0721d63942d4467256ebf567; ?>
<?php unset($__attributesOriginalbf0e4f7e0721d63942d4467256ebf567); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf0e4f7e0721d63942d4467256ebf567)): ?>
<?php $component = $__componentOriginalbf0e4f7e0721d63942d4467256ebf567; ?>
<?php unset($__componentOriginalbf0e4f7e0721d63942d4467256ebf567); ?>
<?php endif; ?>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/pages/contact.blade.php ENDPATH**/ ?>