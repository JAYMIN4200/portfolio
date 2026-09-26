@extends('layouts.frontend')

@section('title', 'FAQ')

@php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']);
@endphp

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        <div class="pointer-events-none absolute -top-32 -left-24 w-[30rem] h-[30rem] rounded-full bg-indigo-500/15 blur-3xl" data-parallax="-0.07" aria-hidden="true"></div>

        <x-frontend.section-header
            badge="FAQ"
            title="Frequently asked questions"
            subtitle="Answers to common questions about how I work."
        />

        @if ($faqs->isEmpty())
            <div class="text-center py-20" data-reveal="up">
                <p class="text-slate-500">No questions yet. Check back soon!</p>
            </div>
        @else
            <div class="max-w-3xl mx-auto space-y-4" data-stagger data-stagger-step="90">
                @foreach ($faqs as $index => $faq)
                    <div data-faq-item class="glass-card rounded-xl overflow-hidden spotlight-card" data-reveal="left">
                        <button type="button" data-faq-toggle aria-expanded="false" class="w-full flex items-center justify-between gap-4 px-6 py-4 text-left transition-colors hover:bg-white/5">
                            <span class="text-white font-semibold">{{ $faq->question }}</span>
                            <svg data-faq-icon class="w-5 h-5 text-slate-400 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div data-faq-answer class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-6 pt-4 pb-6 text-slate-400 leading-relaxed">@if (Str::contains($faq->answer, '</')){!! $faq->answer !!}@else{{ $faq->answer }}@endif</div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-faq-toggle]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const item = btn.closest('[data-faq-item]');
                    const answer = item.querySelector('[data-faq-answer]');
                    const isOpen = btn.getAttribute('aria-expanded') === 'true';

                    document.querySelectorAll('[data-faq-item]').forEach(other => {
                        const otherBtn = other.querySelector('[data-faq-toggle]');
                        const otherAnswer = other.querySelector('[data-faq-answer]');
                        otherBtn.setAttribute('aria-expanded', 'false');
                        other.querySelector('[data-faq-icon]').style.transform = 'rotate(0deg)';
                        if (other === item && isOpen) {
                            otherAnswer.style.maxHeight = otherAnswer.scrollHeight + 'px';
                            otherAnswer.getBoundingClientRect();
                            otherAnswer.style.maxHeight = '0px';
                        } else {
                            otherAnswer.style.maxHeight = '0px';
                        }
                    });

                    if (!isOpen) {
                        btn.setAttribute('aria-expanded', 'true');
                        item.querySelector('[data-faq-icon]').style.transform = 'rotate(180deg)';
                        answer.style.maxHeight = 'none';
                        const fullHeight = answer.scrollHeight;
                        answer.style.maxHeight = '0px';
                        answer.getBoundingClientRect();
                        answer.style.maxHeight = fullHeight + 'px';
                        answer.addEventListener('transitionend', () => {
                            if (btn.getAttribute('aria-expanded') === 'true') answer.style.maxHeight = 'none';
                        }, { once: true });
                    }
                });
            });
        });
    </script>

@endsection