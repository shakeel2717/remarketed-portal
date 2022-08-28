<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parts>
 */
class PartsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'part_categories_id' => $this->faker->randomElement([1, 2, 3, 4]),
            'title' => fake()->macPlatformToken(),
            'stock' => rand(0, 999),
            'min_price' => rand(1, 25),
            'max_price' => rand(26, 999),
            'status' => $this->faker->boolean(),
        ];
    }
}
