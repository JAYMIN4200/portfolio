@php
    $user = $user ?? auth()->user();
    $user->loadMissing('profile');
@endphp

<form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data" data-submitting class="w-full" data-validate data-validate-messages='@json((new \App\Http\Requests\ProfileRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
    @csrf
    @method('PUT')

    <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
        <h2 class="text-lg font-semibold text-slate-800 mb-4">Personal Information</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-form.input name="name" label="Name" :value="$user->name" required placeholder="Your name" />
            <x-form.input name="email" type="email" label="Email" :value="$user->email" required placeholder="you@example.com" />
            <x-form.input name="title" label="Professional Title" :value="$user->profile->title ?? ''" placeholder="e.g. Full-Stack Developer" />
            <x-form.input name="phone" label="Phone" :value="$user->profile->phone ?? ''" placeholder="+1 234 567 890" />
            <x-form.input name="location" label="Location" :value="$user->profile->location ?? ''" placeholder="City, Country" />
            <x-form.input name="website" type="url" label="Website" :value="$user->profile->website ?? ''" placeholder="https://example.com" />
            <x-form.textarea name="bio" label="Bio" :value="$user->profile->bio ?? ''" :rows="4" placeholder="Tell visitors about yourself..." field-class="sm:col-span-2" />
        </div>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
        <h2 class="text-lg font-semibold text-slate-800 mb-1">Brand Name Font</h2>
        <p class="text-xs text-slate-500 mb-4">Choose the font style for your name shown in the header and footer.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-form.select name="brand_font" label="Font Style" data-brand-font-select hint="Live preview below.">
                <option value="poppins" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'poppins' ? 'selected' : '' }}>Poppins (Default)</option>
                <option value="dancing-script" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'dancing-script' ? 'selected' : '' }}>Dancing Script</option>
                <option value="great-vibes" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'great-vibes' ? 'selected' : '' }}>Great Vibes</option>
                <option value="pacifico" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'pacifico' ? 'selected' : '' }}>Pacifico</option>
                <option value="allura" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'allura' ? 'selected' : '' }}>Allura</option>
                <option value="parisienne" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'parisienne' ? 'selected' : '' }}>Parisienne</option>
                <option value="satisfy" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'satisfy' ? 'selected' : '' }}>Satisfy</option>
                <option value="lobster" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'lobster' ? 'selected' : '' }}>Lobster</option>
                <option value="caveat" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'caveat' ? 'selected' : '' }}>Caveat</option>
                <option value="playball" {{ old('brand_font', $user->profile->brand_font ?? 'dancing-script') === 'playball' ? 'selected' : '' }}>Playball</option>
            </x-form.select>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Preview</label>
                <div class="px-4 py-3 rounded-lg border border-slate-200 bg-slate-50 flex items-center h-[46px]">
                    <span data-brand-font-preview class="text-2xl leading-none text-slate-800">{{ $user->name }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
        <h2 class="text-lg font-semibold text-slate-800 mb-4">Social Links</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            <x-form.input name="whatsapp" label="WhatsApp" :value="$user->profile->whatsapp ?? ''" placeholder="+91 98765 43210" />
            <x-form.input name="telegram" type="url" label="Telegram" :value="$user->profile->telegram ?? ''" placeholder="https://t.me/you" />
            <x-form.input name="github" type="url" label="GitHub" :value="$user->profile->github ?? ''" placeholder="https://github.com/you" />
            <x-form.input name="linkedin" type="url" label="LinkedIn" :value="$user->profile->linkedin ?? ''" placeholder="https://linkedin.com/in/you" />
            <x-form.input name="twitter" type="url" label="Twitter / X" :value="$user->profile->twitter ?? ''" placeholder="https://x.com/you" />
            <x-form.input name="instagram" type="url" label="Instagram" :value="$user->profile->instagram ?? ''" placeholder="https://instagram.com/you" />
            <x-form.input name="facebook" type="url" label="Facebook" :value="$user->profile->facebook ?? ''" placeholder="https://facebook.com/you" />
        </div>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
        <h2 class="text-lg font-semibold text-slate-800 mb-4">Media</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <x-form.field name="avatar" label="Avatar" for="avatar" hint="Home hero photo. Max 15MB.">
                <div class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit">
                    <img src="{{ $user->profile?->avatarUrl() ?? asset('images/default-avatar.svg') }}" alt="Avatar" data-avatar-preview class="w-20 h-20 object-cover">
                </div>
                <input type="file" name="avatar" id="avatar" accept="image/*" data-file-preview="avatar" class="form-file">
            </x-form.field>
            <x-form.field name="about_image" label="About Image" for="about_image" hint="About page photo. Max 15MB. Recommended: 600x600px">
                <div class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit">
                    <img src="{{ $user->profile?->aboutImageUrl() ?? asset('images/default-profile.svg') }}" alt="About" data-about-preview class="w-20 h-20 object-cover">
                </div>
                <input type="file" name="about_image" id="about_image" accept="image/*" data-file-preview="about" class="form-file">
            </x-form.field>
            <x-form.field name="home_about_image" label="Home About Image" for="home_about_image" hint="Home page About section photo. Max 15MB. Recommended: 800x600px">
                <div class="mb-2 overflow-hidden rounded-lg border border-slate-200 w-fit">
                    <img src="{{ $user->profile?->homeAboutImageUrl() ?? asset('images/default-profile.svg') }}" alt="Home About" data-home-about-preview class="w-20 h-20 object-cover">
                </div>
                <input type="file" name="home_about_image" id="home_about_image" accept="image/*" data-file-preview="home-about" class="form-file">
            </x-form.field>
            <x-form.field name="resume" label="Resume (PDF)" for="resume" hint="Max 15MB. PDF only.">
                @if ($user->profile?->hasResume())
                    <div class="mb-2 flex items-center gap-3 p-3 rounded-lg border border-slate-200 bg-slate-50">
                        <svg class="w-6 h-6 text-red-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        <div class="flex-1 min-w-0">
                            <iframe src="{{ $user->profile->resumeUrl() }}" title="Resume preview" class="hidden"></iframe>
                            <p class="text-sm font-medium text-slate-800 truncate">{{ basename($user->profile->resume_path) }}</p>
                            <p class="text-xs text-slate-400">{{ $user->profile->resume_downloads }} downloads</p>
                        </div>
                        <a href="{{ $user->profile->resumeUrl() }}" target="_blank" class="shrink-0 inline-flex items-center gap-1.5 text-sm font-medium text-indigo-600 hover:text-indigo-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            Preview
                        </a>
                    </div>
                @endif
                <input type="file" name="resume" id="resume" accept=".pdf" data-resume-input class="form-file">
                <div class="hidden mt-2 p-3 rounded-lg border border-slate-200 bg-slate-50" data-resume-preview>
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-red-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-slate-800 truncate" data-resume-preview-name></p>
                            <p class="text-xs text-slate-500" data-resume-preview-size></p>
                        </div>
                    </div>
                </div>
            </x-form.field>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition-colors">
            <span data-submit-label>Save Changes</span>
            <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
        </button>
    </div>
</form>

@push('scripts')
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
@endpush
