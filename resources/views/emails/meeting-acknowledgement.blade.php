@extends('layouts.mail', [
    'title' => 'We have your meeting request',
    'preheader' => 'I will confirm the '.$meeting->meeting_date?->format('j M').' slot shortly.',
])

@section('mail-title', 'We have your meeting request')
@section('mail-preheader', 'I will confirm the '.$meeting->meeting_date?->format('j M').' slot shortly.')

@section('mail-eyebrow', 'Request Received')
@section('mail-heading', 'Thanks, '.\Illuminate\Support\Str::before($meeting->name, ' ').' — got it!')

@section('mail-content')
    <p style="margin:0 0 20px 0;font-size:16px;line-height:26px;color:#334155;">
        Thank you for requesting a meeting. I have received your request and will confirm
        the exact time by email, usually within one business day.
    </p>

    <p style="margin:0 0 24px 0;font-size:15px;line-height:24px;color:#475569;">
        Here is the slot you asked for:
    </p>

    <x-emails.field-row label="Date">
        {{ $meeting->meeting_date?->format('l, j M Y') ?? '—' }}
    </x-emails::field-row>

    @if ($meeting->meeting_time)
        <x-emails.field-row label="Time">
            {{ \Illuminate\Support\Carbon::parse($meeting->meeting_time)->format('g:i A') }}
            @if ($meeting->duration)
                <span style="color:#64748b;font-weight:400;">({{ $meeting->duration }} min)</span>
            @endif
        </x-emails::field-row>
    @endif

    @if ($meeting->topic)
        <x-emails.field-row label="Topic">{{ $meeting->topic }}</x-emails::field-row>
    @endif

    <p style="margin:24px 0 0 0;font-size:15px;line-height:24px;color:#475569;">
        Need a different time, or want to add something to the agenda? Just reply to this
        email at
        <a href="mailto:{{ $recipientEmail }}" style="color:#4f46e5;font-weight:600;text-decoration:underline;">{{ $recipientEmail }}</a>
        and we will sort it out.
    </p>
@endsection

@section('mail-footer-note', 'You are receiving this email because you requested a meeting on '.$siteName.'.')
