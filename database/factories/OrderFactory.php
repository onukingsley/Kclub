<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->email,
            'phone_no' => fake()->phoneNumber,
            'address' => fake()->streetAddress,
            'item_name' => fake()->streetName,
            'price' => fake()->numberBetween(2000, 500000),
            'quantity' => fake()->numberBetween(1,30),
            'image' => 'http://127.0.0.1:8000/images/single/' . fake()->randomElement(['01', '02', '03', '04', '05', '06', '07', '08']).'.jpg',
            //'user_id' => fake()->randomElement(['1','2','3','4','5','6',]),
            'item_id' => fake()->randomElement(['1','2','3','4','5','6',]),
            'event_id' => fake()->randomElement(['1','2','3','4','5','6',]),
            'USSID' =>  Random::generate(10,'0-9a-e')

        ];
    }
}
