<?php

namespace App\Mail;

use App\Models\Meeting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * Thank-you confirmation sent to the visitor who requested a meeting.
 * Pairs with MeetingRequested, which notifies the site owner.
 */
class MeetingAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Meeting $meeting,
        public string $replyToEmail,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            to: [new Address($this->meeting->email, $this->meeting->name)],
            subject: 'We have your meeting request',
            replyTo: [new Address($this->replyToEmail, config('mail.from.name'))],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.meeting-acknowledgement',
            with: [
                'meeting' => $this->meeting,
                'recipientEmail' => $this->replyToEmail,
            ],
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
