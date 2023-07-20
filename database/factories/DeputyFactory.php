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
            'fullname_tm' => fake()->name(),
            'fullname_en' => fake()->name(),
            'fullname_ru' => fake()->name(),
            'position_tm' => fake()->paragraph(),
            'position_ru' => fake()->paragraph(),
            'position_en' => fake()->paragraph(),
            'biography_tm' => fake()->realText(),
            'biography_ru' => fake()->realText(),
            'biography_en' => fake()->realText(),
            'email' => fake()->email(),
        ];
    }
}
