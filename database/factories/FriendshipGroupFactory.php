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
            'flag_1' => 'img/flag_' . fake()->numberBetween(1,5) . '.png',
            'flag_2' => 'img/flag_' . fake()->numberBetween(1,5) . '.png',
            'country_1_tm' => fake()->country() . '_tm',
            'country_1_ru' => fake()->country() . '_ru',
            'country_1_en' => fake()->country() . '_en',
            'country_2_tm' => fake()->country() . '_tm',
            'country_2_ru' => fake()->country() . '_ru',
            'country_2_en' => fake()->country() . '_en',
            'published_date' => fake()->dateTime(),
        ];
    }
}
