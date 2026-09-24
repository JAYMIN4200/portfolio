<?php

namespace Database\Factories;

use App\Models\Meeting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Meeting>
 */
class MeetingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->optional()->phoneNumber(),
            'company' => fake()->optional()->company(),
            'meeting_date' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'meeting_time' => fake()->time('H:i'),
            'duration' => fake()->optional()->randomElement([15, 30, 45, 60]),
            'topic' => fake()->optional()->catchPhrase(),
            'notes' => fake()->optional()->sentence(),
            'status' => fake()->randomElement(Meeting::STATUSES),
            'source' => fake()->randomElement(Meeting::SOURCES),
        ];
    }
}