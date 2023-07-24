<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deputy>
 */
class DeputyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname_tm' => fake()->name() . '_Turkmen',
            'fullname_ru' => fake()->name() . '_Russian',
            'fullname_en' => fake()->name() . '_English',
            'birth_year_tm' => fake()->year() . ' yyl',
            'birth_year_ru' => fake()->year() . ' год',
            'birth_year_en' => fake()->year() . ' year',
            'position_tm' => 'Turkmen' . fake()->paragraph(),
            'position_ru' => 'Russian' . fake()->paragraph(),
            'position_en' => 'English' . fake()->paragraph(),
            'biography_tm' => '<p>Turkmen' . fake()->realText($maxNbChars = 5000) . '</p>',
            'biography_ru' => '<p>Russian' . fake()->realText($maxNbChars = 5000) . '</p>',
            'biography_en' => '<p>English' . fake()->realText($maxNbChars = 5000) . '</p>',
            'election_district_id' => fake()->numberBetween(1, 5),
            'velayat_id' => fake()->numberBetween(1, 6),
            'email' => fake()->email(),
        ];
    }
}
