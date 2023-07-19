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
            'full_name' => fake()->name(),
            'position_tm' => fake()->word(),
            'position_ru' => fake()->word(),
            'position_en' => fake()->word(),
            'biography_tm' => fake()->realText(),
            'biography_ru' => fake()->realText(),
            'biography_en' => fake()->realText(),
            'email' => fake()->email(),
        ];
    }
}
