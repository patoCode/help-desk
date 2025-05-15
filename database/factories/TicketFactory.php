<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Queue;
use App\Models\Technician;
use App\Models\Ticket;
use App\Models\User;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'code' => fake()->word(),
            'detail' => fake()->text(),
            'type' => fake()->word(),
            'category_id' => Category::factory(),
            'queue_id' => Queue::factory(),
            'from_user' => User::factory()->create()->from_user,
            'technician_id' => Technician::factory(),
            'in_cronograma' => fake()->boolean(),
            'is_promediable' => fake()->boolean(),
            'fecha_reg' => fake()->dateTime(),
            'now_is' => fake()->word(),
        ];
    }
}
