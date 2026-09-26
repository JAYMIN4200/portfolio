@extends('layouts.mail', [
    'title' => 'New enquiry from '.$inquiry->name,
    'preheader' => trim($inquiry->subject ?: 'Contact form submission').' · '.$inquiry->email,
])

@section('mail-title', 'New enquiry from '.$inquiry->name)
@section('mail-preheader', trim($inquiry->subject ?: 'Contact form submission').' · '.$inquiry->email)

@section('mail-eyebrow', 'Contact Form')
@section('mail-heading', 'You have a new enquiry')

@section('mail-content')
    <p style="margin:0 0 24px 0;font-size:15px;line-height:24px;color:#475569;">
        Someone reached out through the contact form on your portfolio. Here are the details:
    </p>

    <x-emails.field-row label="Name">{{ $inquiry->name }}</x-emails::field-row>

    <x-emails.field-row label="Email">
        <a href="mailto:{{ $inquiry->email }}" style="color:#4f46e5;font-weight:600;text-decoration:underline;">{{ $inquiry->email }}</a>
    </x-emails::field-row>

    <x-emails.field-row label="Subject">{{ $inquiry->subject ?: 'Not specified' }}</x-emails::field-row>

    <x-emails.field-row label="Received">{{ $inquiry->created_at?->format('j M Y, g:i A') ?? '—' }}</x-emails::field-row>

    <x-emails.message-box label="Message">{{ $inquiry->message }}</x-emails::message-box>
@endsection
