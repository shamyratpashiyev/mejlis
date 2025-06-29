<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FriendshipGroupDeputy>
 */
class FriendshipGroupDeputyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'friendship_group_id' => fake()->numberBetween(1, 10),
            'deputy_id' => fake()->numberBetween(1, 50),
        ];
    }
}
