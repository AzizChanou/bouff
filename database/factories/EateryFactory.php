<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eatery>
 */
class EateryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'label' => fake()->domainName(),
            'ifu' => fake()->numberBetween(),
            'rccm' => fake()->numberBetween(),
            'description' => fake()->words(4, true),
        ];
    }
}
