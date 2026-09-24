<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Client>
 */
class ClientFactory extends Factory
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
            'company' => fake()->optional()->company(),
            'email' => fake()->optional()->safeEmail(),
            'phone' => fake()->optional()->phoneNumber(),
            'project_type' => fake()->optional()->randomElement(['Web Development', 'Mobile App', 'UI/UX Design', 'API & Backend', 'Consulting']),
            'status' => fake()->randomElement(Client::STATUSES),
            'notes' => fake()->optional()->sentence(),
        ];
    }
}