<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Queue;

class QueueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Queue::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'last_assign' => fake()->numberBetween(-10000, 10000),
            'technician_counter' => fake()->numberBetween(-10000, 10000),
            'is_cronogramable' => fake()->boolean(),
            'is_promediable' => fake()->boolean(),
            'priority' => fake()->word(),
            'status' => fake()->word(),
        ];
    }
}
