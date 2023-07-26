<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsInternational>
 */
class NewsInternationalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_tm' => 'Turkmen' . fake()->paragraph(),
            'title_ru' => 'Russian' . fake()->paragraph(),
            'title_en' => 'English' . fake()->paragraph(),
            'description_tm' => '<p>Turkmen' . fake()->realText($maxNbChars = 5000) . '</p>',
            'description_ru' => '<p>Russian' . fake()->realText($maxNbChars = 5000) . '</p>',
            'description_en' => '<p>English' . fake()->realText($maxNbChars = 5000) . '</p>',
            'event_date' => fake()->dateTime(),
            'image_1' => 'img/news_medium_' . fake()->randomDigit() . '.jpg',
            'image_2' => 'img/news_medium_' . fake()->randomDigit() . '.jpg',
            'image_3' => 'img/news_medium_' . fake()->randomDigit() . '.jpg',
            'image_4' => 'img/news_medium_' . fake()->randomDigit() . '.jpg',
            'image_5' => 'img/news_medium_' . fake()->randomDigit() . '.jpg',
            'image_6' => 'img/news_medium_' . fake()->randomDigit() . '.jpg',
        ];
    }
}
