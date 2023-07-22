<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MejlisActivity>
 */
class MejlisActivityFactory extends Factory
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
            'description_tm' => '<p>' . fake()->realText($maxNbChars = 5000) . '</p>',
            'description_ru' => '<p>' . fake()->realText($maxNbChars = 5000) . '</p>',
            'description_en' => '<p>' . fake()->realText($maxNbChars = 5000) . '</p>',
            'event_date' => fake()->dateTime(),
        ];
    }
}
