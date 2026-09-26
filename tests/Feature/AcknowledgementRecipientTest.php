<?php

namespace Tests\Feature;

use App\Mail\ContactFormAcknowledgement;
use App\Mail\MeetingAcknowledgement;
use App\Models\Meeting;
use App\Models\Message;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;
use Tests\TestCase;

/**
 * Regression coverage for the recipient headers of the visitor thank-you emails.
 *
 * These deliberately build the real message instead of using Mail::fake() because
 * the failure this guards against only surfaces while the message is assembled:
 * a bare Address instance passed to the Envelope "to" argument is spread into the
 * Envelope by its own public properties, turning the display name into a second
 * bogus recipient and breaking the send with an RFC 2822 compliance error.
 */
class AcknowledgementRecipientTest extends TestCase
{
    use RefreshDatabase;

    private const VISITOR_EMAIL = 'jayminpanchal0985@gmail.com';

    /**
     * Send through the array mailer and return the assembled message.
     */
    private function buildMessage(Mailable $mailable): Email
    {
        return Mail::mailer('array')->send($mailable)
            ->getSymfonySentMessage()
            ->getOriginalMessage();
    }

    /**
     * @return array<int, string>
     */
    private function addresses(Email $message, string $type): array
    {
        return array_map(
            fn ($address) => $address->getAddress(),
            $message->{'get'.ucfirst($type)}(),
        );
    }

    public function test_the_contact_thank_you_is_addressed_only_to_the_visitor(): void
    {
        $message = Message::create([
            'name' => 'Happy',
            'email' => self::VISITOR_EMAIL,
            'subject' => 'SEO & Digital Marketing',
            'message' => 'I would like to talk about search visibility.',
        ]);

        $email = $this->buildMessage(new ContactFormAcknowledgement($message, 'owner@example.com'));

        $this->assertSame([self::VISITOR_EMAIL], $this->addresses($email, 'to'));
        $this->assertSame(['Happy'], array_map(
            fn ($address) => $address->getName(),
            $email->getTo(),
        ));
        $this->assertSame(['owner@example.com'], $this->addresses($email, 'replyTo'));
    }

    public function test_the_meeting_thank_you_is_addressed_only_to_the_requester(): void
    {
        $meeting = Meeting::create([
            'name' => 'Happy',
            'email' => self::VISITOR_EMAIL,
            'phone' => '+91 90000 00000',
            'topic' => 'SEO & Digital Marketing',
            'meeting_date' => now()->addDays(3)->toDateString(),
            'meeting_time' => '10:00',
            'duration' => 30,
            'notes' => 'I would like to talk about search visibility.',
        ]);

        $email = $this->buildMessage(new MeetingAcknowledgement($meeting, 'owner@example.com'));

        $this->assertSame([self::VISITOR_EMAIL], $this->addresses($email, 'to'));
        $this->assertSame(['Happy'], array_map(
            fn ($address) => $address->getName(),
            $email->getTo(),
        ));
        $this->assertSame(['owner@example.com'], $this->addresses($email, 'replyTo'));
    }

    public function test_the_envelope_exposes_the_visitor_as_a_single_recipient(): void
    {
        $message = Message::create([
            'name' => 'Happy',
            'email' => self::VISITOR_EMAIL,
            'subject' => 'SEO & Digital Marketing',
            'message' => 'I would like to talk about search visibility.',
        ]);

        $envelope = (new ContactFormAcknowledgement($message, 'owner@example.com'))->envelope();

        $this->assertCount(1, $envelope->to);
        $this->assertSame(self::VISITOR_EMAIL, $envelope->to[0]->address);
        $this->assertSame('Happy', $envelope->to[0]->name);
    }
}
