@extends('layouts.mail', [
    'title' => 'New meeting request from '.$meeting->name,
    'preheader' => trim(($meeting->topic ?: 'Meeting request').' · '.$meeting->meeting_date?->format('j M Y')),
])

@section('mail-title', 'New meeting request from '.$meeting->name)
@section('mail-preheader', trim(($meeting->topic ?: 'Meeting request').' · '.$meeting->meeting_date?->format('j M Y')))

@section('mail-eyebrow', 'Appointment')
@section('mail-heading', 'New meeting request')

@section('mail-content')
    @php
        $statusColors = [
            'pending' => ['bg' => '#fef3c7', 'fg' => '#92400e'],
            'confirmed' => ['bg' => '#dcfce7', 'fg' => '#166534'],
            'completed' => ['bg' => '#e2e8f0', 'fg' => '#334155'],
            'cancelled' => ['bg' => '#fee2e2', 'fg' => '#991b1b'],
        ];
        $badge = $statusColors[$meeting->status] ?? $statusColors['pending'];
    @endphp

    <p style="margin:0 0 24px 0;font-size:15px;line-height:24px;color:#475569;">
        A new appointment was requested through your booking page. Confirm the slot below.
    </p>

    <x-emails.field-row label="Name">{{ $meeting->name }}</x-emails::field-row>

    <x-emails.field-row label="Email">
        <a href="mailto:{{ $meeting->email }}" style="color:#4f46e5;font-weight:600;text-decoration:underline;">{{ $meeting->email }}</a>
    </x-emails::field-row>

    @if ($meeting->phone)
        <x-emails.field-row label="Phone">
            <a href="tel:{{ $meeting->phone }}" style="color:#4f46e5;font-weight:600;text-decoration:underline;">{{ $meeting->phone }}</a>
        </x-emails::field-row>
    @endif

    @if ($meeting->company)
        <x-emails.field-row label="Company">{{ $meeting->company }}</x-emails::field-row>
    @endif

    <x-emails.field-row label="Scheduled">
        {{ $meeting->meeting_date?->format('l, j M Y') ?? '—' }}
        @if ($meeting->meeting_time)
            at {{ \Illuminate\Support\Carbon::parse($meeting->meeting_time)->format('g:i A') }}
        @endif
        @if ($meeting->duration)
            <span style="color:#64748b;font-weight:400;">({{ $meeting->duration }} min)</span>
        @endif
    </x-emails::field-row>

    @if ($meeting->topic)
        <x-emails.field-row label="Topic">{{ $meeting->topic }}</x-emails::field-row>
    @endif

    <x-emails.field-row label="Status">
        <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="border-collapse:separate;">
            <tr>
                <td style="background-color:{{ $badge['bg'] }};border-radius:20px;padding:4px 12px;font-size:12px;font-weight:700;letter-spacing:.04em;text-transform:uppercase;color:{{ $badge['fg'] }};">
                    {{ $meeting->status }}
                </td>
            </tr>
        </table>
    </x-emails::field-row>

    @if ($meeting->notes)
        <x-emails.message-box label="Notes">{{ $meeting->notes }}</x-emails::message-box>
    @endif
@endsection

@section('mail-footer-note', 'Requested via the booking page on '.$siteName.'.')
