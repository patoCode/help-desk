<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Configuration;
use App\Models\configurations_history;

class ConfigurationsHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ConfigurationsHistory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'config_old' => Configuration::factory()->create()->config_old,
            'json_old' => fake()->text(),
            'json_new' => fake()->text(),
            'user_reg' => fake()->word(),
            'fecha_reg' => fake()->dateTime(),
        ];
    }
}
