<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assigned_developer' => fake()->numberBetween(1, 9),
            'client_id' => fake()->numberBetween(1, 10),
            'product_id' => fake()->numberBetween(1, 5),
            'ticket_status_id' => fake()->numberBetween(1,3),
            'ticket_priority_id' => fake()->numberBetween(1, 3),
            'name' => fake()->sentence,
            'description' => fake()->paragraph,
            'date_closed' => fake()->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
