<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Contacts;
use App\Models\Technician;
use App\Models\User;

class ContactsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contacts::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'key' => fake()->word(),
            'value' => fake()->word(),
            'techinician_id' => Technician::factory(),
            'user_id' => User::factory(),
        ];
    }
}
