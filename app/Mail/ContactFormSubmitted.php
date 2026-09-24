<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Message $message) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Enquiry: '.($this->message->subject ?: 'Contact Form Message'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form-submitted',
            with: ['inquiry' => $this->message],
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
