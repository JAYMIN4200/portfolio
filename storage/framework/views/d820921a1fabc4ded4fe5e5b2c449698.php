<?php $__env->startSection('title', 'Edit Profile'); ?>

<?php $__env->startSection('content'); ?>

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Profile</h1>
        <p class="text-slate-500 mt-1">Update your profile information, avatar and resume.</p>
    </div>

    <form method="POST" action="<?php echo e(route('admin.profile.update')); ?>" enctype="multipart/form-data" data-submitting class="w-full" data-validate data-validate-messages='<?php echo json_encode((new \App\Http\Requests\ProfileRequest)->messages(), 15, 512) ?>' data-validate-error-class="text-red-500 text-xs mt-1">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Personal Information</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="<?php echo e(old('name', $user->name)); ?>" required
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-300 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Your name">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Email <span class="text-red-500">*</span></label>
                    <input type="email" name="email" value="<?php echo e(old('email', $user->email)); ?>" required
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-300 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="you@example.com">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Professional Title</label>
                    <input type="text" name="title" value="<?php echo e(old('title', $user->profile->title ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="e.g. Full-Stack Developer">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Phone</label>
                    <input type="text" name="phone" value="<?php echo e(old('phone', $user->profile->phone ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="+1 234 567 890">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Location</label>
                    <input type="text" name="location" value="<?php echo e(old('location', $user->profile->location ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="City, Country">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Website</label>
                    <input type="url" name="website" value="<?php echo e(old('website', $user->profile->website ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://example.com">
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 mb-1">Bio</label>
                    <textarea name="bio" rows="4"
                              class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none"
                              placeholder="Tell visitors about yourself..."><?php echo e(old('bio', $user->profile->bio ?? '')); ?></textarea>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-1">Brand Name Font</h2>
            <p class="text-xs text-slate-500 mb-4">Choose the font style for your name shown in the header and footer.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Font Style</label>
                    <div class="relative">
                        <select name="brand_font" data-brand-font-select
                                class="w-full px-3 py-2.5 pr-10 rounded-lg border border-slate-300 text-slate-800 appearance-none bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                            <option value="poppins" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'poppins' ? 'selected' : ''); ?>>Poppins (Default)</option>
                            <option value="dancing-script" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'dancing-script' ? 'selected' : ''); ?>>Dancing Script</option>
                            <option value="great-vibes" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'great-vibes' ? 'selected' : ''); ?>>Great Vibes</option>
                            <option value="pacifico" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'pacifico' ? 'selected' : ''); ?>>Pacifico</option>
                            <option value="allura" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'allura' ? 'selected' : ''); ?>>Allura</option>
                            <option value="parisienne" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'parisienne' ? 'selected' : ''); ?>>Parisienne</option>
                            <option value="satisfy" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'satisfy' ? 'selected' : ''); ?>>Satisfy</option>
                            <option value="lobster" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'lobster' ? 'selected' : ''); ?>>Lobster</option>
                            <option value="caveat" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'caveat' ? 'selected' : ''); ?>>Caveat</option>
                            <option value="playball" <?php echo e(old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'playball' ? 'selected' : ''); ?>>Playball</option>
                        </select>
                        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </span>
                    </div>
                    <p class="text-xs text-slate-400 mt-1.5">Live preview below.</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Preview</label>
                    <div class="px-4 py-3 rounded-lg border border-slate-200 bg-slate-50 flex items-center h-[46px]">
                        <span data-brand-font-preview class="text-2xl leading-none text-slate-800"><?php echo e($user->name); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Social Links</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">WhatsApp</label>
                    <input type="text" name="whatsapp" value="<?php echo e(old('whatsapp', $user->profile->whatsapp ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="+91 98765 43210">
                    <?php $__errorArgs = ['whatsapp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Telegram</label>
                    <input type="url" name="telegram" value="<?php echo e(old('telegram', $user->profile->telegram ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://t.me/you">
                    <?php $__errorArgs = ['telegram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">GitHub</label>
                    <input type="url" name="github" value="<?php echo e(old('github', $user->profile->github ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://github.com/you">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">LinkedIn</label>
                    <input type="url" name="linkedin" value="<?php echo e(old('linkedin', $user->profile->linkedin ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://linkedin.com/in/you">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Twitter / X</label>
                    <input type="url" name="twitter" value="<?php echo e(old('twitter', $user->profile->twitter ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://x.com/you">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Instagram</label>
                    <input type="url" name="instagram" value="<?php echo e(old('instagram', $user->profile->instagram ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://instagram.com/you">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Facebook</label>
                    <input type="url" name="facebook" value="<?php echo e(old('facebook', $user->profile->facebook ?? '')); ?>"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://facebook.com/you">
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Media</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Avatar</label>
                    <?php if($user->profile && $user->profile->avatar): ?>
                        <div class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit">
                            <img src="<?php echo e(asset('storage/' . $user->profile->avatar)); ?>" alt="Avatar" data-avatar-preview class="w-20 h-20 object-cover">
                        </div>
                    <?php endif; ?>
                    <input type="file" name="avatar" accept="image/*" data-file-preview="avatar"
                           class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    <p class="text-xs text-slate-400 mt-1">Home hero photo. Max 15MB.</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">About Image</label>
                    <?php if($user->profile && $user->profile->about_image): ?>
                        <div class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit">
                            <img src="<?php echo e(asset('storage/' . $user->profile->about_image)); ?>" alt="About" data-about-preview class="w-20 h-20 object-cover">
                        </div>
                    <?php endif; ?>
                    <input type="file" name="about_image" accept="image/*" data-file-preview="about"
                           class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    <p class="text-xs text-slate-400 mt-1">About page photo. Max 15MB. Recommended: 600x600px</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Home About Image</label>
                    <?php if($user->profile && $user->profile->home_about_image): ?>
                        <div class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit">
                            <img src="<?php echo e(asset('storage/' . $user->profile->home_about_image)); ?>" alt="Home About" data-home-about-preview class="w-20 h-20 object-cover">
                        </div>
                    <?php endif; ?>
                    <input type="file" name="home_about_image" accept="image/*" data-file-preview="home-about"
                           class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    <p class="text-xs text-slate-400 mt-1">Home page About section photo. Max 15MB. Recommended: 800x600px</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Resume (PDF)</label>
                    <?php if($user->profile && $user->profile->resume_path): ?>
                        <div class="mb-2 flex items-center gap-3 p-3 rounded-lg border border-slate-200 bg-slate-50">
                            <svg class="w-6 h-6 text-red-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                            <div class="flex-1 min-w-0">
                                <iframe src="<?php echo e(asset('storage/' . $user->profile->resume_path)); ?>" title="Resume preview" class="hidden"></iframe>
                                <p class="text-sm font-medium text-slate-800 truncate"><?php echo e(basename($user->profile->resume_path)); ?></p>
                                <p class="text-xs text-slate-400"><?php echo e($user->profile->resume_downloads); ?> downloads</p>
                            </div>
                            <a href="<?php echo e(asset('storage/' . $user->profile->resume_path)); ?>" target="_blank" class="shrink-0 inline-flex items-center gap-1.5 text-sm font-medium text-indigo-600 hover:text-indigo-700">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Preview
                            </a>
                        </div>
                    <?php endif; ?>
                    <input type="file" name="resume" accept=".pdf" data-resume-input
                           class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    <p class="text-xs text-slate-400 mt-1">Max 15MB. PDF only.</p>
                    <div class="hidden mt-2 p-3 rounded-lg border border-slate-200 bg-slate-50" data-resume-preview>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-red-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-slate-800 truncate" data-resume-preview-name></p>
                                <p class="text-xs text-slate-500" data-resume-preview-size></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition-colors">
                <span data-submit-label>Save Changes</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const avatarInput = document.querySelector('[data-file-preview="avatar"]');
            const aboutInput = document.querySelector('[data-file-preview="about"]');
            const setupImagePreview = (input, previewAttr) => {
                input?.addEventListener('change', (e) => {
                    const file = e.target.files[0];
                    if (!file) return;
                    const reader = new FileReader();
                    reader.onload = (ev) => {
                        let preview = document.querySelector(previewAttr);
                        if (!preview) {
                            const wrap = document.createElement('div');
                            wrap.className = 'mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit';
                            preview = document.createElement('img');
                            preview.dataset[previewAttr.slice(6, -1)] = '';
                            preview.className = 'w-20 h-20 object-cover';
                            wrap.appendChild(preview);
                            input.closest('div')?.insertBefore(wrap, input);
                        }
                        preview.src = ev.target.result;
                    };
                    reader.readAsDataURL(file);
                });
            };
            setupImagePreview(avatarInput, '[data-avatar-preview]');
            setupImagePreview(aboutInput, '[data-about-preview]');
            setupImagePreview(document.querySelector('[data-file-preview="home-about"]'), '[data-home-about-preview]');

            const resumeInput = document.querySelector('[data-resume-input]');
            const resumePreview = document.querySelector('[data-resume-preview]');
            resumeInput?.addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (!file) return;
                document.querySelector('[data-resume-preview-name]').textContent = file.name;
                document.querySelector('[data-resume-preview-size]').textContent = `${(file.size / 1024 / 1024).toFixed(2)} MB`;
                resumePreview?.classList.remove('hidden');
            });

            const fontSelect = document.querySelector('[data-brand-font-select]');
            const fontPreview = document.querySelector('[data-brand-font-preview]');
            const fontClassMap = {
                'poppins': 'font-brand-poppins',
                'dancing-script': 'font-brand-dancing-script',
                'great-vibes': 'font-brand-great-vibes',
                'pacifico': 'font-brand-pacifico',
                'allura': 'font-brand-allura',
                'parisienne': 'font-brand-parisienne',
                'satisfy': 'font-brand-satisfy',
                'lobster': 'font-brand-lobster',
                'caveat': 'font-brand-caveat',
                'playball': 'font-brand-playball',
            };
            const applyFontPreview = (value) => {
                Object.values(fontClassMap).forEach((cls) => fontPreview?.classList.remove(cls));
                fontPreview?.classList.add(fontClassMap[value] ?? 'font-brand-poppins');
            };
            fontSelect?.addEventListener('change', (e) => applyFontPreview(e.target.value));
            if (fontSelect && fontPreview) applyFontPreview(fontSelect.value);
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/admin/profile/edit.blade.php ENDPATH**/ ?>