<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => null,
            'title' => fake()->sentence(3),
            'category' => fake()->randomElement(Task::CATEGORIES),
            'description' => fake()->optional()->paragraph(),
            'priority' => fake()->randomElement(array_keys(Task::PRIORITIES)),
            'status' => fake()->randomElement(array_keys(Task::STATUSES)),
            'due_date' => fake()->dateTimeBetween('-1 week', '+1 month'),
            'completed_at' => null,
            'is_active' => true,
        ];
    }

    /**
     * Mark the task as done.
     */
    public function done(): static
    {
        return $this->state(fn () => [
            'status' => 'done',
            'completed_at' => now(),
        ]);
    }

    /**
     * Mark the task as high priority.
     */
    public function highPriority(): static
    {
        return $this->state(fn () => ['priority' => 'high']);
    }
}
