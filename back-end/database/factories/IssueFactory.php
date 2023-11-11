<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Issue>
 */
class IssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => fake()->numberBetween(1, 10),
            'issue_type_id' => fake()->numberBetween(1, 4),
            'issue_status_id' => fake()->numberBetween(1, 3),
            'issue_priority_id' => fake()->numberBetween(1, 4),
            'name' => fake()->sentence,
            'description' => fake()->paragraph,
            'date_resolved' => fake()->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
