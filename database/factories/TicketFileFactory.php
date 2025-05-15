<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TicketEvent;
use App\Models\ticket_file;

class TicketFileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TicketFile::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'event_id' => TicketEvent::factory(),
            'label' => fake()->word(),
            'description' => fake()->text(),
            'format' => fake()->word(),
            'status' => fake()->word(),
            'fecha_reg' => fake()->dateTime(),
        ];
    }
}
