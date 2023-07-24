<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Committee>
 */
class CommitteeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_tm' => fake()->paragraph($nbSentences = 1),
            'name_ru' => fake()->paragraph($nbSentences = 1),
            'name_en' => fake()->paragraph($nbSentences = 1),
            'committee_head_id' => fake()->numberBetween(1,50),
        ];
    }
}
