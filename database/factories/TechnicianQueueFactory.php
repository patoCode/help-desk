<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Queue;
use App\Models\Technician;
use App\Models\technician_queue;

class TechnicianQueueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TechnicianQueue::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'technician_id' => Technician::factory(),
            'queue_id' => Queue::factory(),
            'position' => fake()->numberBetween(-10000, 10000),
            'status' => fake()->word(),
        ];
    }
}
