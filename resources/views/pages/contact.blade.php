@extends('layouts.frontend')

@section('title', 'Contact')

@section('meta_description', 'Get in touch with me about projects, collaborations, or anything else.')

@php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']);
@endphp

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-20">
        <div class="pointer-events-none absolute -top-40 right-0 w-[34rem] h-[34rem] rounded-full bg-indigo-500/20 blur-3xl" data-parallax="0.08" aria-hidden="true"></div>
        <div class="pointer-events-none absolute top-40 -left-40 w-[28rem] h-[28rem] rounded-full bg-purple-500/15 blur-3xl" data-parallax="-0.06" aria-hidden="true"></div>

        <div class="relative text-center mb-16">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-4" data-reveal="zoom">Contact</span>
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight" data-reveal="flip" data-reveal-delay="90">Let's talk</h1>
            <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto" data-reveal="up" data-reveal-delay="200">Whether you have a project in mind, a question, or just want to say hi, I'd love to hear from you.</p>
        </div>

        <div class="relative" data-reveal="blur" data-reveal-delay="260">
            <x-frontend.contact-form :dark="false" />
        </div>
    </section>

@endsection