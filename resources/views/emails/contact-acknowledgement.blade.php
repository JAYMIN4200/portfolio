@extends('layouts.mail', [
    'title' => 'Thank you for your message',
    'preheader' => 'Your message reached '.$siteName.' — I will reply shortly.',
])

@section('mail-title', 'Thank you for your message')
@section('mail-preheader', 'Your message reached '.$siteName.' — I will reply shortly.')

@section('mail-eyebrow', 'Message Received')
@section('mail-heading', 'Thank you, '.\Illuminate\Support\Str::before($inquiry->name, ' ').'!')

@section('mail-content')
    <p style="margin:0 0 20px 0;font-size:16px;line-height:26px;color:#334155;">
        Your message has reached me successfully. I read every enquiry personally and
        usually reply within one to two business days.
    </p>

    <p style="margin:0 0 24px 0;font-size:15px;line-height:24px;color:#475569;">
        In the meantime, here is a copy of what you sent:
    </p>

    <x-emails.field-row label="Subject">{{ $inquiry->subject ?: 'General enquiry' }}</x-emails::field-row>

    <x-emails.field-row label="Sent">{{ $inquiry->created_at?->format('j M Y, g:i A') ?? '—' }}</x-emails::field-row>

    <x-emails.message-box>{{ $inquiry->message }}</x-emails::message-box>

    <p style="margin:24px 0 0 0;font-size:15px;line-height:24px;color:#475569;">
        If your enquiry is urgent, you can also reach me directly at
        <a href="mailto:{{ $recipientEmail }}" style="color:#4f46e5;font-weight:600;text-decoration:underline;">{{ $recipientEmail }}</a>.
    </p>
@endsection

@section('mail-footer-note', 'You are receiving this email because you contacted '.$siteName.' through the website.')
