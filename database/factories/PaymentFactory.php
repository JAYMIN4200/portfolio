<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => null,
            'amount' => fake()->randomFloat(2, 500, 50000),
            'payment_date' => fake()->dateTimeBetween('-6 months', 'now'),
            'method' => fake()->randomElement(array_keys(Payment::METHODS)),
            'status' => fake()->randomElement(array_keys(Payment::STATUSES)),
            'reference' => fake()->optional()->bothify('PAY-####'),
            'notes' => fake()->optional()->sentence(),
        ];
    }

    /**
     * Mark the payment as received.
     */
    public function received(): static
    {
        return $this->state(fn () => ['status' => Payment::STATUS_RECEIVED]);
    }

    /**
     * Mark the payment as pending.
     */
    public function pending(): static
    {
        return $this->state(fn () => ['status' => Payment::STATUS_PENDING]);
    }
}
