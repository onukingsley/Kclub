<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_name' => fake()->name,
            'category_image' => 'http://127.0.0.1:8000/images/single/' . fake()->randomElement(['01', '02', '03', '04', '05', '06', '07', '08']).'.jpg',

        ];
    }
}
