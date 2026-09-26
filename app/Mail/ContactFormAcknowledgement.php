<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * Thank-you confirmation sent to the visitor who submitted the contact form.
 * Pairs with ContactFormSubmitted, which notifies the site owner.
 */
class ContactFormAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Message $message,
        public string $replyToEmail,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            to: [new Address($this->message->email, $this->message->name)],
            subject: 'Thank you for contacting me',
            replyTo: [new Address($this->replyToEmail, config('mail.from.name'))],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-acknowledgement',
            with: [
                'inquiry' => $this->message,
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
