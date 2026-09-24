@extends('layouts.frontend')

@section('title', 'Home')

@php
    $profile = App\Models\Profile::with('user')->first();
    $settings = App\Models\Setting::getMany([
        'site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon'
    ]);
@endphp

@section('content')

    <x-frontend.hero :profile="$profile" :settings="$settings" />

    @if (!empty($clients) && $clients->isNotEmpty())
        <section class="py-14 relative overflow-hidden" aria-label="Trusted by">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-8">
                <p data-reveal class="text-xs font-semibold uppercase tracking-widest text-slate-500">
                    Trusted by <span class="gradient-text gradient-text-animate font-bold">clients & partners</span>
                </p>
            </div>

            <div data-marquee data-reveal class="marquee-mask relative overflow-hidden">
                <div data-marquee-track class="marquee-track items-center">
                    @foreach ($clients as $client)
                        <div class="group flex items-center gap-3 glass-card rounded-xl px-5 py-3 shrink-0 mr-5">
                            <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm shrink-0 shadow-lg shadow-indigo-500/25 transition-transform duration-300 group-hover:scale-110">
                                {{ strtoupper(substr($client->company ?: $client->name, 0, 1)) }}
                            </div>
                            <div class="leading-tight">
                                <p class="text-white font-semibold text-sm">{{ $client->company ?: $client->name }}</p>
                                @if ($client->company && $client->name !== $client->company)
                                    <p class="text-slate-500 text-xs">{{ $client->name }}</p>
                                @elseif ($client->project_type)
                                    <p class="text-slate-500 text-xs">{{ $client->project_type }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('clients.index') }}" data-reveal class="inline-flex items-center gap-2 text-sm font-semibold text-primary-400 hover:text-primary-300 transition-colors">
                    See all clients
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
                </a>
            </div>
        </section>

        <x-frontend.divider />
    @endif

    <section id="about" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="About Me"
            title="Get to know me"
            subtitle="A quick introduction to who I am, what I do, and what drives me."
        />

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center" data-stagger>
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl opacity-10 blur-2xl"></div>
                <div class="relative rounded-2xl overflow-hidden border border-white/10 aspect-4/3">
                    @if ($profile && $profile->home_about_image)
                        <img src="{{ asset('storage/' . $profile->home_about_image) }}" alt="{{ $profile->user->name }}" class="w-full h-full object-cover">
                    @elseif ($profile && $profile->avatar)
                        <img src="{{ asset('storage/' . $profile->avatar) }}" alt="{{ $profile->user->name }}" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-slate-800 to-slate-900 flex items-center justify-center">
                            <span class="text-9xl text-white/10 font-bold">{{ strtoupper(substr($profile->user->name ?? 'D', 0, 1)) }}</span>
                        </div>
                    @endif
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-white mb-4">A passionate {{ $profile->title ?? 'developer' }} crafting digital experiences</h3>
                <div class="space-y-4 text-slate-400 leading-relaxed">
                    <p>{{ $profile->bio ?? '' }}</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Name</p>
                        <p class="text-white font-medium">{{ $profile->user->name ?? '—' }}</p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Email</p>
                        <a href="mailto:{{ $profile->user->email ?? '#' }}" class="text-white font-medium break-all hover:text-indigo-300 transition-colors">{{ $profile->user->email ?? '—' }}</a>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Experience</p>
                        <p class="text-white font-medium">{{ $profile->location ?? '—' }}</p>
                    </div>
                    <div class="glass-card rounded-xl p-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Freelance</p>
                        <p class="inline-flex items-center gap-2 text-white font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Available
                        </p>
                    </div>
                </div>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                        Let's Talk
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
                    </a>
                    @if ($profile && $profile->resume_path)
                        <a href="{{ route('resume.download') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-white/10 text-white font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            Download Resume
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <x-frontend.divider />

    @if ($skills->isNotEmpty())
    <section id="skills" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="My Skills"
            title="Skills & expertise"
            subtitle="The technologies and tools I work with every day."
        />

        <div class="space-y-10">
            @foreach ($skills as $category => $categorySkills)
                <div>
<h3 data-reveal="up" class="text-white font-semibold text-xl mb-5 flex items-center gap-2">
                            <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-indigo-500 to-purple-600"></span>
                            {{ ucfirst(str_replace('-', ' ', $category)) }}
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" data-stagger>
                        @foreach ($categorySkills as $skill)
                            <x-frontend.skill-bar :skill="$skill" />
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    <x-frontend.divider />

    @if ($experiences->isNotEmpty())
    <section id="experience" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="Experience"
            title="Where I've worked"
            subtitle="My professional journey and work history."
        />

        <div class="max-w-3xl mx-auto" data-stagger>
            @foreach ($experiences as $experience)
                <x-frontend.experience-card :experience="$experience" />
            @endforeach
        </div>
    </section>
    @endif

    <x-frontend.divider />

    @if ($projects->isNotEmpty())
    <section id="projects" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="Portfolio"
            title="Featured projects"
            subtitle="A selection of my recent work and what I've been building."
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-stagger>
            @foreach ($projects as $project)
                <x-frontend.project-card :project="$project" />
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-white/10 text-white font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">
                View All Projects
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
            </a>
        </div>
    </section>
    @endif

    <x-frontend.divider />

    @if ($services->isNotEmpty())
    <section id="services" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="Services"
            title="What I can do for you"
            subtitle="Services I offer to help bring your ideas to life."
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-stagger>
            @foreach ($services as $service)
                <x-frontend.service-card :service="$service" />
            @endforeach
        </div>
    </section>
    @endif

    @if ($testimonials->isNotEmpty())
    <x-frontend.divider />

    <section id="testimonials" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="Testimonials"
            title="What clients say"
            subtitle="Kind words from people I've worked with."
        />

        <div class="relative sm:px-14">
            <button type="button" data-testimonial-scroll="left" aria-label="Scroll testimonials left"
                    class="hidden sm:flex absolute left-0 top-1/2 -translate-y-1/2 z-10 p-2.5 rounded-full glass-card hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button type="button" data-testimonial-scroll="right" aria-label="Scroll testimonials right"
                    class="hidden sm:flex absolute right-0 top-1/2 -translate-y-1/2 z-10 p-2.5 rounded-full glass-card hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>

            <div data-testimonial-track data-stagger class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-2 no-scrollbar scroll-smooth">
                @foreach ($testimonials as $testimonial)
                    <div class="snap-start shrink-0 w-full sm:w-[380px]">
                        <x-frontend.testimonial-card :testimonial="$testimonial" />
                    </div>
                @endforeach
            </div>

            <div class="sm:hidden mt-4 text-center text-sm text-slate-500">Swipe to see more</div>
        </div>
    </section>
    @endif

    <section id="newsletter" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <div class="relative rounded-3xl overflow-hidden border border-white/10 p-10 sm:p-14 text-center" data-reveal="zoom">
            <div class="absolute -top-20 -right-20 w-72 h-72 bg-indigo-600/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-purple-600/20 rounded-full blur-3xl"></div>
            <div class="relative">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-5">Newsletter</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight mb-3">Stay in the loop</h2>
                <p class="text-slate-400 max-w-xl mx-auto mb-8">Subscribe to my newsletter for updates on new projects, tutorials and insights. No spam, ever.</p>
                <div>
                    <form method="POST" action="{{ route('newsletter.subscribe') }}" data-newsletter-form data-validate data-validate-messages='@json((new \App\Http\Requests\NewsletterRequest)->messages())' data-validate-error-class="newsletter-field-error mt-3 text-sm text-red-400" class="max-w-md mx-auto flex flex-col sm:flex-row gap-3">
                        @csrf
                        <input type="email" name="email" required placeholder="you@example.com" data-validate-error-slot="[data-newsletter-error]" class="flex-1 px-4 py-3 rounded-lg bg-slate-900/60 border border-white/10 text-white placeholder-slate-500 focus:border-primary-500/60 focus:outline-none focus:ring-2 focus:ring-primary-500/20 transition-all @error('email') border-red-400/60 @enderror">
                        <button type="submit" class="px-6 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                            Subscribe
                        </button>
                    </form>
                    <p data-newsletter-message class="hidden mt-4 text-sm text-emerald-400">Thanks for subscribing! Check your inbox for updates.</p>
                    <p class="newsletter-field-error mt-3 text-sm text-red-400 hidden" data-newsletter-error></p>
                    @error('email')
                        <p class="mt-3 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 scroll-mt-24">
        <x-frontend.section-header
            badge="Contact"
            title="Get in touch"
            subtitle="Ready to start a project together? Let's talk."
        />

        <x-frontend.contact-form :dark="false" />
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const newsletterForm = document.querySelector('[data-newsletter-form]');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    const btn = newsletterForm.querySelector('button[type="submit"]');
                    if (btn) {
                        btn.disabled = true;
                        btn.textContent = 'Subscribing...';
                    }
                    try {
                        const response = await fetch(newsletterForm.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '',
                                'Accept': 'application/json',
                            },
                            body: new FormData(newsletterForm)
                        });
                        let data = null;
                        try { data = await response.json(); } catch (err) { data = null; }
                        if (data && data.success) {
                            newsletterForm.reset();
                            const errEl = document.querySelector('[data-newsletter-error]');
                            if (errEl) { errEl.textContent = ''; errEl.classList.add('hidden'); }
                            const msg = document.querySelector('[data-newsletter-message]');
                            msg?.classList.remove('hidden');
                            setTimeout(() => msg?.classList.add('hidden'), 4000);
                        } else if (data && data.errors) {
                            const errEl = document.querySelector('[data-newsletter-error]');
                            const input = newsletterForm.querySelector('input[name="email"]');
                            const first = Object.values(data.errors).flat()[0];
                            if (errEl && first) {
                                errEl.textContent = first;
                                errEl.classList.remove('hidden');
                            }
                            if (input) {
                                input.classList.add('border-red-400/60');
                                input.focus();
                            }
                        } else {
                            window.location.reload();
                        }
                    } catch (err) {
                        window.location.href = newsletterForm.action;
                    } finally {
                        if (btn) {
                            btn.disabled = false;
                            btn.textContent = 'Subscribe';
                        }
                    }
                });
            }

            const track = document.querySelector('[data-testimonial-track]');
            if (track) {
                const scrollByStep = (dir) => {
                    const card = track.querySelector('.testimonial-card');
                    const step = dir === 'right' ? (card ? card.offsetWidth + 24 : 400) : -(card ? card.offsetWidth + 24 : 400);
                    track.scrollBy({ left: step, behavior: 'smooth' });
                };
                document.querySelectorAll('[data-testimonial-scroll]').forEach(button => {
                    button.addEventListener('click', () => {
                        scrollByStep(button.dataset.testimonialScroll === 'right' ? 'right' : 'left');
                    });
                });

                let autoTimer = null;
                let paused = false;
                const startAuto = () => {
                    if (autoTimer) clearInterval(autoTimer);
                    autoTimer = setInterval(() => {
                        if (paused) return;
                        const maxScroll = track.scrollWidth - track.clientWidth;
                        if (track.scrollLeft >= maxScroll - 4) {
                            track.scrollTo({ left: 0, behavior: 'smooth' });
                        } else {
                            scrollByStep('right');
                        }
                    }, 5000);
                };
                startAuto();
                track.addEventListener('mouseenter', () => { paused = true; startAuto(); });
                track.addEventListener('mouseleave', () => { paused = false; startAuto(); });
            }

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

@endsection
