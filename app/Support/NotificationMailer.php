<?php

namespace App\Support;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

/**
 * Sends the transactional mail that follows a public form submission: a
 * notification to the site owner plus a thank-you to the visitor.
 *
 * Delivery problems are logged loudly instead of being swallowed, so a broken
 * SMTP host can never quietly cost the owner a lead — the submission itself
 * always succeeds, because the enquiry is already persisted in the database.
 */
class NotificationMailer
{
    /**
     * Address that receives owner notifications. Prefers the contact email
     * configured in the admin settings panel, then falls back to the first
     * admin account.
     *
     * A blank value is treated as "not configured" so an emptied settings
     * field falls through to the fallback rather than silently dropping mail.
     */
    public function ownerAddress(): ?string
    {
        $configured = Setting::get('contact_email');

        if (filled($configured)) {
            return $configured;
        }

        return User::query()->where('is_admin', true)->value('email');
    }

    /**
     * Send a notification to the site owner.
     */
    public function toOwner(Mailable $mailable, string $context): bool
    {
        $address = $this->ownerAddress();

        if (blank($address)) {
            Log::error('Owner notification skipped: no recipient address is configured.', [
                'context' => $context,
                'mailable' => $mailable::class,
            ]);

            return false;
        }

        $mailable->to($address);

        return $this->deliver($mailable, $context, ['to' => $address]);
    }

    /**
     * Send a thank-you to the person who submitted a form. The mailable
     * already carries its own recipient, set from the submitted address.
     */
    public function toSender(Mailable $mailable, string $context, string $senderAddress): bool
    {
        return $this->deliver($mailable, $context, ['to' => $senderAddress]);
    }

    /**
     * Hand the message to the mailer, converting any transport failure into a
     * log entry so it is visible instead of disappearing into a catch block.
     */
    private function deliver(Mailable $mailable, string $context, array $meta = []): bool
    {
        try {
            Mail::send($mailable);

            return true;
        } catch (Throwable $e) {
            Log::error('Failed to send portfolio notification email.', [
                'context' => $context,
                'mailable' => $mailable::class,
                'error' => $e->getMessage(),
                ...$meta,
            ]);

            return false;
        }
    }
}
