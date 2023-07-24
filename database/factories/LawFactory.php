<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Law>
 */
class LawFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_tm' => 'Turkmen' . fake()->paragraph($nbSentences = 4),
            'title_ru' => 'Russian' . fake()->paragraph($nbSentences = 4),
            'title_en' => 'English' . fake()->paragraph($nbSentences = 4),
            'description_tm' => '<p>Turkmen' . fake()->realText($maxNbChars = 5000) . '</p>',
            'description_ru' => '<p>Russian' . fake()->realText($maxNbChars = 5000) . '</p>',
            'description_en' => '<p>English' . fake()->realText($maxNbChars = 5000) . '</p>',
            'published_date' => fake()->dateTime(),
        ];
    }
}
