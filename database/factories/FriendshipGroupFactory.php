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
            'title_tm' => 'Turkmen_' . fake()->paragraph($nbSentences=1),
            'title_ru' => 'Russian_' . fake()->paragraph($nbSentences=1),
            'title_en' => 'English_' . fake()->paragraph($nbSentences=1),
            'description_tm' => '<p>Turkmen_' . fake()->realText($maxNbChars = 5000) . '</p>',
            'description_ru' => '<p>Russian_' . fake()->realText($maxNbChars = 5000) . '</p>',
            'description_en' => '<p>English_' . fake()->realText($maxNbChars = 5000) . '</p>',
            'published_date' => fake()->dateTime(),
        ];
    }
}
