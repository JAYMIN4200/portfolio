<?php

namespace Tests\Feature;

use App\Mail\ContactFormAcknowledgement;
use App\Mail\ContactFormSubmitted;
use App\Mail\MeetingAcknowledgement;
use App\Mail\MeetingRequested;
use App\Models\Meeting;
use App\Models\Message;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * The notification templates are hand-written HTML tables, so a Blade or
 * component mistake would only surface as a broken email at runtime. Render
 * every one of them and assert the layout actually produced output.
 */
class NotificationMailRenderTest extends TestCase
{
    use RefreshDatabase;

    private function message(): Message
    {
        return Message::create([
            'name' => 'Priya Sharma',
            'email' => 'priya@example.com',
            'subject' => 'Project Discussion',
            'message' => 'I would like to discuss a Laravel project.',
        ]);
    }

    private function meeting(): Meeting
    {
        return Meeting::create([
            'name' => 'Rahul Verma',
            'email' => 'rahul@example.com',
            'phone' => '+919876543210',
            'meeting_date' => now()->addWeek(),
            'meeting_time' => '14:30',
            'duration' => 30,
            'topic' => 'Project Discussion',
            'notes' => 'Looking for a rebuild.',
            'status' => 'pending',
            'source' => 'public',
        ]);
    }

    public function test_the_contact_notification_renders(): void
    {
        $rendered = (new ContactFormSubmitted($this->message()))->render();

        $this->assertStringContainsString('You have a new enquiry', $rendered);
        $this->assertStringContainsString('priya@example.com', $rendered);
        $this->assertStringContainsString('I would like to discuss a Laravel project.', $rendered);
    }

    public function test_the_contact_thank_you_renders(): void
    {
        $rendered = (new ContactFormAcknowledgement($this->message(), 'owner@example.com'))->render();

        $this->assertStringContainsString('Thank you, Priya!', $rendered);
        $this->assertStringContainsString('owner@example.com', $rendered);
    }

    public function test_the_meeting_notification_renders(): void
    {
        $rendered = (new MeetingRequested($this->meeting()))->render();

        $this->assertStringContainsString('New meeting request', $rendered);
        $this->assertStringContainsString('rahul@example.com', $rendered);
        $this->assertStringContainsString('Project Discussion', $rendered);
        // Status badge is rendered from the enum-ish status value.
        $this->assertMatchesRegularExpression('/>\s*pending\s*</', $rendered);
    }

    public function test_the_meeting_thank_you_renders(): void
    {
        $rendered = (new MeetingAcknowledgement($this->meeting(), 'owner@example.com'))->render();

        $this->assertStringContainsString('Thanks, Rahul', $rendered);
        $this->assertStringContainsString('Project Discussion', $rendered);
    }

    public function test_templates_escape_visitor_supplied_html(): void
    {
        $message = Message::create([
            'name' => '<script>alert(1)</script>',
            'email' => 'evil@example.com',
            'subject' => 'Project Discussion',
            'message' => '<img src=x onerror=alert(1)>',
        ]);

        $rendered = (new ContactFormAcknowledgement($message, 'owner@example.com'))->render();

        $this->assertStringNotContainsString('<script>alert(1)</script>', $rendered);
        $this->assertStringNotContainsString('<img src=x onerror=alert(1)>', $rendered);
    }
}
