<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Event;
use App\Models\Item;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$user = User::factory()->create();
        Event::factory()->count(7)->create();
        Ticket::factory()->count(3)->for($user)->create();*/

        Category::factory(5)->create();
        Event::factory(6)->create();
        Item::factory(8)->create();
/*        User::factory(20)->has(Ticket::factory(5)->has(Order::factory(3)))->create();*/
        User::factory(20)->has(Ticket::factory(5))->has(Order::factory(3))->create();

    }

}
