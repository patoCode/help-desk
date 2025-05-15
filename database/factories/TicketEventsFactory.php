<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Queue;
use App\Models\Technician;
use App\Models\Ticket;
use App\Models\User;
use App\Models\ticket_events;

class TicketEventsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TicketEvents::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ticket_id' => Ticket::factory(),
            'event' => fake()->word(),
            'in_status' => fake()->word(),
            'category_id' => Category::factory(),
            'queue_id' => Queue::factory(),
            'technician_id' => Technician::factory(),
            'user_id' => User::factory(),
            'in_cronograma' => fake()->boolean(),
            'is_promediable' => fake()->boolean(),
            'fecha_reg' => fake()->dateTime(),
            'user_reg' => fake()->word(),
            'status' => fake()->word(),
        ];
    }
}
