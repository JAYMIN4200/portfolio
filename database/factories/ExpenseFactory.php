<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'amount' => fake()->randomFloat(2, 5, 2000),
            'category' => fake()->randomElement(Expense::CATEGORIES),
            'expense_date' => fake()->date(),
            'notes' => fake()->optional()->sentence(),
        ];
    }
}