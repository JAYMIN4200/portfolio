<?php $__env->startSection('title', 'Home'); ?>

<?php
    $profile = App\Models\Profile::with('user')->first();
    $settings = App\Models\Setting::getMany([
        'site_title', 'site_tagline', 'site_description', 'meta_keywords'
    ]);
?>

<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginald3ef3bf91c913f7f4eb45956c072854e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald3ef3bf91c913f7f4eb45956c072854e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.hero','data' => ['profile' => $profile,'settings' => $settings]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['profile' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profile),'settings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($settings)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald3ef3bf91c913f7f4eb45956c072854e)): ?>
<?php $attributes = $__attributesOriginald3ef3bf91c913f7f4eb45956c072854e; ?>
<?php unset($__attributesOriginald3ef3bf91c913f7f4eb45956c072854e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3ef3bf91c913f7f4eb45956c072854e)): ?>
<?php $component = $__componentOriginald3ef3bf91c913f7f4eb45956c072854e; ?>
<?php unset($__componentOriginald3ef3bf91c913f7f4eb45956c072854e); ?>
<?php endif; ?>

    <section id="about" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <?php if (isset($component)) { $__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.section-header','data' => ['badge' => 'About Me','title' => 'Get to know me','subtitle' => 'A quick introduction to who I am, what I do, and what drives me.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => 'About Me','title' => 'Get to know me','subtitle' => 'A quick introduction to who I am, what I do, and what drives me.']); ?>
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

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative">
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

            <div>
                <h3 class="text-2xl font-bold text-white mb-4">A passionate <?php echo e($profile->title ?? 'developer'); ?> crafting digital experiences</h3>
                <div class="space-y-4 text-slate-400 leading-relaxed">
                    <p><?php echo e($profile->bio ?? ''); ?></p>
                </div>

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
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Experience</p>
                        <p class="text-white font-medium"><?php echo e($profile->location ?? '—'); ?></p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Freelance</p>
                        <p class="inline-flex items-center gap-2 text-white font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Available
                        </p>
                    </div>
                </div>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                        Let's Talk
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
    <section id="skills" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <?php if (isset($component)) { $__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.section-header','data' => ['badge' => 'My Skills','title' => 'Skills & expertise','subtitle' => 'The technologies and tools I work with every day.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => 'My Skills','title' => 'Skills & expertise','subtitle' => 'The technologies and tools I work with every day.']); ?>
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

    <?php if($experiences->isNotEmpty()): ?>
    <section id="experience" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <?php if (isset($component)) { $__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.section-header','data' => ['badge' => 'Experience','title' => 'Where I\'ve worked','subtitle' => 'My professional journey and work history.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => 'Experience','title' => 'Where I\'ve worked','subtitle' => 'My professional journey and work history.']); ?>
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

        <div class="max-w-3xl mx-auto">
            <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal6470bbc4a89a6575fd50c2669aa99831 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6470bbc4a89a6575fd50c2669aa99831 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.experience-card','data' => ['experience' => $experience]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.experience-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['experience' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($experience)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6470bbc4a89a6575fd50c2669aa99831)): ?>
<?php $attributes = $__attributesOriginal6470bbc4a89a6575fd50c2669aa99831; ?>
<?php unset($__attributesOriginal6470bbc4a89a6575fd50c2669aa99831); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6470bbc4a89a6575fd50c2669aa99831)): ?>
<?php $component = $__componentOriginal6470bbc4a89a6575fd50c2669aa99831; ?>
<?php unset($__componentOriginal6470bbc4a89a6575fd50c2669aa99831); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if($projects->isNotEmpty()): ?>
    <section id="projects" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <?php if (isset($component)) { $__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.section-header','data' => ['badge' => 'Portfolio','title' => 'Featured projects','subtitle' => 'A selection of my recent work and what I\'ve been building.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => 'Portfolio','title' => 'Featured projects','subtitle' => 'A selection of my recent work and what I\'ve been building.']); ?>
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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="text-center mt-12">
            <a href="<?php echo e(route('projects.index')); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-white/10 text-white font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">
                View All Projects
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
            </a>
        </div>
    </section>
    <?php endif; ?>

    <?php if($services->isNotEmpty()): ?>
    <section id="services" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <?php if (isset($component)) { $__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.section-header','data' => ['badge' => 'Services','title' => 'What I can do for you','subtitle' => 'Services I offer to help bring your ideas to life.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => 'Services','title' => 'What I can do for you','subtitle' => 'Services I offer to help bring your ideas to life.']); ?>
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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc3097693bbf263d5eb2aefbf6834ee62 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3097693bbf263d5eb2aefbf6834ee62 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.service-card','data' => ['service' => $service]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['service' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($service)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc3097693bbf263d5eb2aefbf6834ee62)): ?>
<?php $attributes = $__attributesOriginalc3097693bbf263d5eb2aefbf6834ee62; ?>
<?php unset($__attributesOriginalc3097693bbf263d5eb2aefbf6834ee62); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3097693bbf263d5eb2aefbf6834ee62)): ?>
<?php $component = $__componentOriginalc3097693bbf263d5eb2aefbf6834ee62; ?>
<?php unset($__componentOriginalc3097693bbf263d5eb2aefbf6834ee62); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <?php endif; ?>

    <section id="contact" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <?php if (isset($component)) { $__componentOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabcd9dd0a6aa4045cd37a5df8301c15a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.section-header','data' => ['badge' => 'Contact','title' => 'Get in touch','subtitle' => 'Ready to start a project together? Let\'s talk.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => 'Contact','title' => 'Get in touch','subtitle' => 'Ready to start a project together? Let\'s talk.']); ?>
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const el = document.querySelector('[data-typewriter]');
            if (!el) return;
            const words = JSON.parse(el.dataset.words || '[]');
            if (!words.length) return;

            let wordIndex = 0;
            let charIndex = 0;
            let deleting = false;

            const type = () => {
                const word = words[wordIndex];
                if (deleting) {
                    el.textContent = word.substring(0, charIndex - 1);
                    charIndex--;
                    if (charIndex <= 0) {
                        deleting = false;
                        wordIndex = (wordIndex + 1) % words.length;
                        setTimeout(type, 400);
                        return;
                    }
                } else {
                    el.textContent = word.substring(0, charIndex + 1);
                    charIndex++;
                    if (charIndex === word.length) {
                        deleting = true;
                        setTimeout(type, 1800);
                        return;
                    }
                }
                setTimeout(type, deleting ? 50 : 100);
            };
            type();
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/pages/home.blade.php ENDPATH**/ ?>