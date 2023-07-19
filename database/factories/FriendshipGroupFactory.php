<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FriendshipGroup>
 */
class FriendshipGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_tm' => fake()->paragraph(),
            'title_ru' => fake()->paragraph(),
            'title_en' => fake()->paragraph(),
            'description_tm' => fake()->text(),
            'description_ru' => fake()->text(),
            'description_en' => fake()->text(),
            'published_date' => fake()->dateTime(),
        ];
    }
}
