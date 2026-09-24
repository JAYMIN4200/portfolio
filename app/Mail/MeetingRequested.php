<?php

namespace App\Mail;

use App\Models\Meeting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MeetingRequested extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Meeting $meeting) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Meeting Request from '.($this->meeting->name ?? 'Visitor'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.meeting-requested',
            with: ['meeting' => $this->meeting],
        );
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}