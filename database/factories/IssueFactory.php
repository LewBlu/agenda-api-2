<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\issue>
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
            'key' => fake()->word(),
            'key_number' => fake()->numberBetween(1,100),
            'summary' => fake()->sentence(),
            'assignee_id' => User::all()->random()->id,
            'owner_id' => User::all()->random()->id,
            'start_date' => fake()->dateTimeThisYear('+2 months'),
            'due_date' => fake()->dateTimeThisYear('+3 months'),
        ];
    }
}
