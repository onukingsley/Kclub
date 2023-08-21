<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_name' => fake()->streetName,
            'image' => 'http://127.0.0.1:8000/images/single/' . fake()->randomElement(['01', '02', '03', '04', '05', '06', '07', '08']).'.jpg',
            'price' => fake()->numberBetween(2000 ,500000),
            'quantity' => '400',
            'discount_price' => '1000',
            'description' => 'Inventore est tempore corrupti. Ipsum ut laboriosam et pariatur autem laudantium amet',
            'category_id' => fake()->randomElement(['1','2','3','4','5',]),

        ];
    }
}
