<?php

namespace Tests\Feature;

use App\Mail\ContactFormAcknowledgement;
use App\Mail\ContactFormSubmitted;
use App\Models\Message;
use App\Models\Setting;
use App\Models\User;
use App\Support\NotificationMailer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Tests\TestCase;

class ContactNotificationMailTest extends TestCase
{
    use RefreshDatabase;

    private const OWNER_EMAIL = 'owner@example.com';

    protected function setUp(): void
    {
        parent::setUp();

        Mail::fake();
    }

    /**
     * @return array<string, string>
     */
    private function validPayload(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Priya Sharma',
            'email' => 'priya@example.com',
            'subject' => 'Project Discussion',
            'message' => 'I would like to discuss a Laravel project with you.',
        ], $overrides);
    }

    public function test_it_notifies_the_owner_using_the_configured_contact_email(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        $this->post(route('contact.send'), $this->validPayload());

        Mail::assertSent(ContactFormSubmitted::class, function (ContactFormSubmitted $mail) {
            return $mail->hasTo(self::OWNER_EMAIL);
        });
    }

    public function test_it_sends_a_thank_you_to_the_visitor(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        $this->post(route('contact.send'), $this->validPayload());

        Mail::assertSent(ContactFormAcknowledgement::class, function (ContactFormAcknowledgement $mail) {
            return $mail->hasTo('priya@example.com')
                && $mail->replyToEmail === self::OWNER_EMAIL;
        });
    }

    public function test_it_still_sends_the_visitor_thank_you_when_the_owner_email_is_blank(): void
    {
        Setting::set('contact_email', '');

        $this->post(route('contact.send'), $this->validPayload());

        Mail::assertSent(ContactFormAcknowledgement::class, fn (ContactFormAcknowledgement $mail) => $mail->hasTo('priya@example.com'));
    }

    public function test_it_falls_back_to_the_admin_account_when_no_contact_email_is_configured(): void
    {
        User::factory()->create(['email' => self::OWNER_EMAIL, 'is_admin' => true]);
        Setting::set('contact_email', '');

        $this->post(route('contact.send'), $this->validPayload());

        Mail::assertSent(ContactFormSubmitted::class, fn (ContactFormSubmitted $mail) => $mail->hasTo(self::OWNER_EMAIL));
    }

    public function test_it_persists_the_message_and_logs_the_error_when_delivery_fails(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        Log::spy();
        Mail::shouldReceive('send')->andThrow(new RuntimeException('SMTP unavailable'));

        $response = $this->post(route('contact.send'), $this->validPayload());

        $response->assertRedirect(route('contact'));
        $this->assertSame(1, Message::count());
        Log::shouldHaveReceived('error')->twice();
    }

    public function test_it_logs_the_failure_when_the_owner_address_is_unresolvable(): void
    {
        Log::spy();

        // No configured contact email and no admin account to fall back to.
        $sent = $this->app->make(NotificationMailer::class)->toOwner(
            new ContactFormSubmitted(Message::create($this->validPayload())),
            'contact.owner_notification',
        );

        $this->assertFalse($sent);
        Log::shouldHaveReceived('error')->once();
    }

    public function test_the_other_subject_option_is_flattened_into_the_subject(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        $this->post(route('contact.send'), $this->validPayload([
            'subject' => 'Other',
            'subject_other' => 'Freelance Retainer',
        ]));

        $this->assertSame('Other: Freelance Retainer', Message::sole()->subject);
    }
}
