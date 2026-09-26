<?php

namespace Tests\Feature;

use App\Mail\MeetingAcknowledgement;
use App\Mail\MeetingRequested;
use App\Models\Meeting;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Tests\TestCase;

class MeetingNotificationMailTest extends TestCase
{
    use RefreshDatabase;

    private const OWNER_EMAIL = 'owner@example.com';

    protected function setUp(): void
    {
        parent::setUp();

        Mail::fake();
    }

    /**
     * @return array<string, mixed>
     */
    private function validPayload(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Rahul Verma',
            'email' => 'rahul@example.com',
            'phone' => '+919876543210',
            'company' => 'Acme Studio',
            'meeting_date' => now()->addWeek()->toDateString(),
            'meeting_time' => '14:30',
            'duration' => 30,
            'topic' => 'Project Discussion',
            'notes' => 'Looking for a Laravel developer for a rebuild.',
        ], $overrides);
    }

    public function test_it_notifies_the_owner_using_the_configured_contact_email(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        $this->post(route('meetings.request'), $this->validPayload());

        Mail::assertSent(MeetingRequested::class, fn (MeetingRequested $mail) => $mail->hasTo(self::OWNER_EMAIL));
    }

    public function test_it_sends_a_thank_you_to_the_visitor(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        $this->post(route('meetings.request'), $this->validPayload());

        Mail::assertSent(MeetingAcknowledgement::class, function (MeetingAcknowledgement $mail) {
            return $mail->hasTo('rahul@example.com')
                && $mail->replyToEmail === self::OWNER_EMAIL;
        });
    }

    public function test_it_falls_back_to_the_admin_account_when_no_contact_email_is_configured(): void
    {
        User::factory()->create(['email' => self::OWNER_EMAIL, 'is_admin' => true]);
        Setting::set('contact_email', '');

        $this->post(route('meetings.request'), $this->validPayload());

        Mail::assertSent(MeetingRequested::class, fn (MeetingRequested $mail) => $mail->hasTo(self::OWNER_EMAIL));
    }

    public function test_it_persists_the_request_and_logs_the_error_when_delivery_fails(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        Log::spy();
        Mail::shouldReceive('send')->andThrow(new RuntimeException('SMTP unavailable'));

        $response = $this->post(route('meetings.request'), $this->validPayload());

        $response->assertRedirect(route('meetings.book'));
        $this->assertSame(1, Meeting::count());
        Log::shouldHaveReceived('error')->twice();
    }

    public function test_it_stores_public_bookings_as_pending_from_the_public_source(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        $this->post(route('meetings.request'), $this->validPayload());

        $meeting = Meeting::sole();
        $this->assertSame('pending', $meeting->status);
        $this->assertSame('public', $meeting->source);
    }

    public function test_the_other_topic_option_is_flattened_into_the_topic(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        $this->post(route('meetings.request'), $this->validPayload([
            'topic' => Meeting::TOPIC_OTHER,
            'topic_other' => 'Career Advice',
        ]));

        $this->assertSame('Career Advice', Meeting::sole()->topic);
    }

    public function test_it_rejects_a_meeting_date_in_the_past(): void
    {
        Setting::set('contact_email', self::OWNER_EMAIL);

        $this->post(route('meetings.request'), $this->validPayload([
            'meeting_date' => now()->subWeek()->toDateString(),
        ]));

        $this->assertSame(0, Meeting::count());
        Mail::assertNothingSent();
    }
}
