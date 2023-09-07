<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'venue' => 'Mokete night Life Gra Enugu',
            'event_name' => fake()->randomElement(['Africana','Silent Disco','Pool Party','Mokete','Crocs party','Treat or tequilla','White party', 'Unmasked']),
            'description' => 'Inventore est tempore corrupti. Ipsum ut laboriosam et pariatur autem laudantium amet',
            'dress_code' => fake()->randomElement(['Senator','All white', 'Casual', 'Masked', 'Halloween Costume','Suit']),
            'ticketing' => fake()->numberBetween(2000,5000),
            'event_date' => fake()->dateTimeThisMonth(),
            'image' => 'http://127.0.0.1:8000/images/tickets/tickets-col-' . fake()->randomElement(['01', '02', '03', '04', '05', '06']).'.jpg',

        ];
    }
}
