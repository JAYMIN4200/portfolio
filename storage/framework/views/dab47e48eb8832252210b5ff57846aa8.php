<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('meta_description', 'Learn more about me, my background, skills, and what I do.'); ?>

<?php
    $profile = App\Models\Profile::with('user')->first();
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords']);
?>

<?php $__env->startSection('content'); ?>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-16">
        <div class="text-center mb-16">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-4">About Me</span>
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">Get to know me better</h1>
            <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto">My story, my skills, and what I bring to the table.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
                <div class="relative mb-8">
                    <div class="absolute -inset-4 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl opacity-10 blur-2xl"></div>
                    <div class="relative rounded-2xl overflow-hidden border border-white/10 aspect-4/3">
                        <?php if($profile && $profile->avatar): ?>
                            <img src="<?php echo e(asset('storage/' . $profile->avatar)); ?>" alt="<?php echo e($profile->user->name); ?>" class="w-full h-full object-cover">
                        <?php else: ?>
                            <div class="w-full h-full bg-gradient-to-br from-slate-800 to-slate-900 flex items-center justify-center">
                                <span class="text-9xl text-white/10 font-bold"><?php echo e(strtoupper(substr($profile->user->name ?? 'D', 0, 1))); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="glass-card rounded-xl p-5 text-center">
                        <p class="text-3xl font-bold gradient-text"><?php echo e($projectCount ?? '7+'); ?></p>
                        <p class="text-sm text-slate-400 mt-1">Projects Done</p>
                    </div>
                    <div class="glass-card rounded-xl p-5 text-center">
                        <p class="text-3xl font-bold gradient-text"><?php echo e($skillCount ?? '20+'); ?></p>
                        <p class="text-sm text-slate-400 mt-1">Technologies</p>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">A bit about who I am</h2>
                <div class="space-y-4 text-slate-400 leading-relaxed">
                    <p><?php echo e($profile->bio ?? ''); ?></p>
                </div>

                <?php if($profile): ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Name</p>
                        <p class="text-white font-medium"><?php echo e($profile->user->name ?? '—'); ?></p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Email</p>
                        <p class="text-white font-medium break-all"><?php echo e($profile->user->email ?? '—'); ?></p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Location</p>
                        <p class="text-white font-medium"><?php echo e($profile->location ?? '—'); ?></p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Status</p>
                        <p class="inline-flex items-center gap-2 text-white font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Available
                        </p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Role</p>
                        <p class="text-white font-medium"><?php echo e($profile->title ?? 'Developer'); ?></p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Freelance</p>
                        <p class="text-white font-medium">Available</p>
                    </div>
                </div>
                <?php endif; ?>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                        Let's Work Together
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
                    </a>
                    <?php if($profile && $profile->resume_path): ?>
                        <a href="<?php echo e(asset('storage/' . $profile->resume_path)); ?>" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-white/10 text-white font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            Download Resume
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php if($skills->isNotEmpty()): ?>
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <?php if (isset($component)) { $__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.section-header','data' => ['badge' => 'My Skills','title' => 'Skills & proficiency','subtitle' => 'A detailed breakdown of the technologies I use and my proficiency levels.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => 'My Skills','title' => 'Skills & proficiency','subtitle' => 'A detailed breakdown of the technologies I use and my proficiency levels.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a)): ?>
<?php $attributes = $__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a; ?>
<?php unset($__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a)): ?>
<?php $component = $__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a; ?>
<?php unset($__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a); ?>
<?php endif; ?>

        <div class="space-y-10">
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $categorySkills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <h3 class="text-white font-semibold text-xl mb-5 flex items-center gap-2">
                        <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-indigo-500 to-purple-600"></span>
                        <?php echo e(ucfirst(str_replace('-', ' ', $category))); ?>

                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <?php $__currentLoopData = $categorySkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal61458af2fc9c9d5d6976a572cd9981f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61458af2fc9c9d5d6976a572cd9981f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.skill-bar','data' => ['skill' => $skill]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.skill-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['skill' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($skill)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal61458af2fc9c9d5d6976a572cd9981f9)): ?>
<?php $attributes = $__attributesOriginal61458af2fc9c9d5d6976a572cd9981f9; ?>
<?php unset($__attributesOriginal61458af2fc9c9d5d6976a572cd9981f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61458af2fc9c9d5d6976a572cd9981f9)): ?>
<?php $component = $__componentOriginal61458af2fc9c9d5d6976a572cd9981f9; ?>
<?php unset($__componentOriginal61458af2fc9c9d5d6976a572cd9981f9); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <?php endif; ?>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="glass-card rounded-2xl p-8 sm:p-12 text-center relative overflow-hidden">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-96 h-56 bg-indigo-600/20 rounded-full blur-3xl"></div>
            <h2 class="relative text-2xl md:text-3xl font-bold text-white mb-4">Have an idea? Let's bring it to life.</h2>
            <p class="relative text-slate-400 max-w-xl mx-auto mb-8">I'm always looking for new and exciting projects to work on. If you have something in mind, don't hesitate to reach out.</p>
            <a href="<?php echo e(route('contact')); ?>" class="relative inline-flex items-center gap-2 px-8 py-3.5 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                Get In Touch
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
            </a>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/pages/about.blade.php ENDPATH**/ ?>