@extends('layouts.frontend')

@section('title', 'Contact')

@section('meta_description', 'Get in touch with me about projects, collaborations, or anything else.')

@php
    $settings = App\Models\Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']);
@endphp

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-20">
        <div class="text-center mb-16" data-reveal>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-4">Contact</span>
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">Let's talk</h1>
            <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto">Whether you have a project in mind, a question, or just want to say hi, I'd love to hear from you.</p>
        </div>

        <x-frontend.contact-form :dark="false" />
    </section>

@endsection