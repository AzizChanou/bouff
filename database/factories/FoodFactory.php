<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->streetName(),
            'price' => fake()->numberBetween(500, 15000),
            'description' => fake()->words(3, true),
            'food_category_id' => fake()->numberBetween(1, 3),
            'picture_path' => '/storage/food_picture/4179b944-74ce-4ab9-a5aa-c975a4923d8a_Panini.jpg'
        ];
    }
}
