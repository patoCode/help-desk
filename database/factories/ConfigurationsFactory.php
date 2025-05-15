<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Configurations;
use App\Models\Tenant;

class ConfigurationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Configurations::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'key' => fake()->word(),
            'value' => fake()->word(),
            'description' => fake()->text(),
            'status' => fake()->word(),
            'tenant_id' => Tenant::factory(),
        ];
    }
}
