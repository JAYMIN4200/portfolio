@extends('layouts.frontend')

@section('title', 'Book a Meeting')

@section('meta_description', 'Book a meeting with me to discuss your project, collaboration, or any questions.')

@php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']);
    $profile = App\Models\Profile::with('user')->first();
    $meeting = App\Models\Meeting::class;
    $selectedTopic = old('topic');
@endphp

@section('content')

    <section class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-24 overflow-hidden">
        <div class="pointer-events-none absolute -top-40 right-0 w-[34rem] h-[34rem] rounded-full bg-indigo-500/20 blur-3xl"></div>
        <div class="pointer-events-none absolute top-40 -left-40 w-[28rem] h-[28rem] rounded-full bg-purple-500/15 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 right-1/4 w-72 h-72 rounded-full bg-pink-500/10 blur-3xl"></div>

        <div class="relative text-center mb-16" data-reveal="up">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-5 pulse-dot">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Let's connect
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight">
                Let's schedule a <span class="bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">call</span>
            </h1>
            <p class="mt-5 text-lg text-slate-400 max-w-2xl mx-auto">Pick a date and time that suits you. Tell me what's on your mind, and I'll confirm the meeting shortly after.</p>
        </div>

        <div class="relative grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-12 items-start">
            <div class="lg:col-span-2 space-y-4" data-stagger>
                <h2 class="text-2xl font-bold text-white tracking-tight mb-2">How it works</h2>

                @php $steps = [
                    ['title' => 'Pick a slot', 'desc' => 'Choose any date and time that works for you.'],
                    ['title' => 'Tell me what you need', 'desc' => 'Share your project idea, budget, or burning questions.'],
                    ['title' => 'I confirm', 'desc' => 'I reply within 24 hours to lock the meeting in.'],
                ]; @endphp
                @foreach ($steps as $i => $step)
                    <div class="glass-card rounded-2xl p-5 flex items-start gap-4 group">
                        <div class="relative">
                            <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white font-bold flex items-center justify-center shadow-lg shadow-indigo-500/30 transition-transform duration-300 group-hover:scale-110">{{ $i + 1 }}</span>
                        </div>
                        <div>
                            <p class="text-white font-semibold">{{ $step['title'] }}</p>
                            <p class="text-sm text-slate-400 mt-0.5">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach

                @if ($profile && $profile->user->email)
                    <div class="glass-card rounded-2xl p-5 border-l-4 border-l-emerald-400 flex items-center gap-4">
                        <div class="w-11 h-11 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 uppercase tracking-wider">Questions first?</p>
                            <a href="mailto:{{ $profile->user->email }}" class="text-white font-medium hover:text-primary-300 transition-colors break-all">{{ $profile->user->email }}</a>
                        </div>
                    </div>
                @endif
            </div>

            <div class="lg:col-span-3 glass-card rounded-3xl p-6 sm:p-9 relative overflow-hidden" data-reveal="right">
                <div class="pointer-events-none absolute -top-24 -right-24 w-64 h-64 rounded-full bg-indigo-500/10 blur-3xl"></div>

                @if (session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 flex items-center gap-3" data-alert>
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-sm font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 flex items-center gap-3">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-sm font-medium">
                            @foreach ($errors->all() as $error)
                                @if (!$loop->first)<span class="ml-1">,</span>@endif {{ $error }}
                            @endforeach
                        </span>
                    </div>
                @endif

                <form action="{{ route('meetings.request') }}" method="POST" class="space-y-7" data-validate data-validate-messages='@json((new \App\Http\Requests\MeetingRequest)->messages())' data-validate-error-class="contact-field-error mt-2 text-sm text-red-400">
                    @csrf

                    <div>
                        <p class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-slate-500 mb-4">
                            <span class="w-6 h-6 rounded-lg bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 flex items-center justify-center text-[10px] font-bold">1</span>
                            Your details
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Name <span class="text-red-400">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                       class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('name') border-red-400/60 @enderror"
                                       placeholder="Your name">
                                @error('name')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email <span class="text-red-400">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                       class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('email') border-red-400/60 @enderror"
                                       placeholder="you@example.com">
                                @error('email')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-slate-300 mb-2">Phone</label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" inputmode="tel"
                                       class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('phone') border-red-400/60 @enderror"
                                       placeholder="e.g. +91 98765 43210 or +1 (315) 322 5888">
                                <p class="mt-1 text-xs text-slate-500">Indian & international numbers — spaces, brackets and dashes are stripped automatically.</p>
                                @error('phone')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="company" class="block text-sm font-medium text-slate-300 mb-2">Company</label>
                                <input type="text" id="company" name="company" value="{{ old('company') }}"
                                       class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('company') border-red-400/60 @enderror"
                                       placeholder="Optional">
                                @error('company')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-slate-500 mb-4">
                            <span class="w-6 h-6 rounded-lg bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 flex items-center justify-center text-[10px] font-bold">2</span>
                            Schedule
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="meeting_date" class="block text-sm font-medium text-slate-300 mb-2">Preferred Date <span class="text-red-400">*</span></label>
                                <input type="date" id="meeting_date" name="meeting_date" value="{{ old('meeting_date') }}" required min="{{ date('Y-m-d') }}"
                                       class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('meeting_date') border-red-400/60 @enderror">
                                @error('meeting_date')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <label for="meeting_time" class="block text-sm font-medium text-slate-300">Preferred Time <span class="text-red-400">*</span></label>
                                    <label for="duration" class="block text-sm font-medium text-slate-300 ml-3">Duration</label>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <input type="time" id="meeting_time" name="meeting_time" value="{{ old('meeting_time') }}" required
                                           class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('meeting_time') border-red-400/60 @enderror">
                                    <select id="duration" name="duration"
                                            class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('duration') border-red-400/60 @enderror">
                                        <option value="" disabled @selected(!old('duration'))>Minutes</option>
                                        <option value="15" @selected(old('duration') == 15)>15 min</option>
                                        <option value="30" @selected(old('duration') == 30)>30 min</option>
                                        <option value="45" @selected(old('duration') == 45)>45 min</option>
                                        <option value="60" @selected(old('duration') == 60)>60 min</option>
                                        <option value="90" @selected(old('duration') == 90)>90 min</option>
                                    </select>
                                </div>
                                @error('meeting_time')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                                @error('duration')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-slate-500 mb-4">
                            <span class="w-6 h-6 rounded-lg bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 flex items-center justify-center text-[10px] font-bold">3</span>
                            What's on your mind?
                        </p>
                        <div class="space-y-5">
                            <div>
                                <label for="topic" class="block text-sm font-medium text-slate-300 mb-2">Topic</label>
                                <div class="relative">
                                    <select id="topic" name="topic"
                                            class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white pr-11 appearance-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('topic') border-red-400/60 @enderror">
                                        <option value="" disabled selected @selected(!$selectedTopic)>Select a topic…</option>
                                        @foreach ($meeting::TOPICS as $topic)
                                            <option value="{{ $topic }}" @selected($selectedTopic === $topic)>{{ $topic }}</option>
                                        @endforeach
                                        <option value="{{ $meeting::TOPIC_OTHER }}" @selected($selectedTopic === $meeting::TOPIC_OTHER)>Other…</option>
                                    </select>
                                    <svg class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                                @error('topic')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div id="topic-other-wrap" class="{{ $selectedTopic === $meeting::TOPIC_OTHER ? '' : 'hidden' }}">
                                <label for="topic_other" class="block text-sm font-medium text-slate-300 mb-2">Tell us your topic <span class="text-red-400">*</span></label>
                                <input type="text" id="topic_other" name="topic_other" value="{{ old('topic_other') }}"
                                       class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('topic_other') border-red-400/60 @enderror"
                                       placeholder="Write your topic here…">
                                @error('topic_other')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="notes" class="block text-sm font-medium text-slate-300 mb-2">Notes</label>
                                <textarea id="notes" name="notes" rows="4"
                                          class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none @error('notes') border-red-400/60 @enderror"
                                          placeholder="Anything you'd like me to know in advance...">{{ old('notes') }}</textarea>
                                @error('notes')
                                    <p class="contact-field-error mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-full inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.01] transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            Request Meeting
                        </button>
                        <p class="mt-3 text-center text-xs text-slate-500">I'll get back to you within 24 hours to confirm the meeting.</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var topic = document.getElementById('topic');
            var otherWrap = document.getElementById('topic-other-wrap');
            var otherInput = document.getElementById('topic_other');
            var otherValue = @json($meeting::TOPIC_OTHER);
            if (!topic || !otherWrap) return;
            function toggleOther() {
                var isOther = topic.value === otherValue;
                otherWrap.classList.toggle('hidden', !isOther);
                if (otherInput) {
                    if (isOther) {
                        otherInput.setAttribute('required', 'required');
                    } else {
                        otherInput.removeAttribute('required');
                    }
                }
            }
            topic.addEventListener('change', toggleOther);
            toggleOther();
        });
    </script>
@endpush