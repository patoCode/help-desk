<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Tenant;
use App\Models\category_tenant;

class CategoryTenantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryTenant::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'tenant_id' => Tenant::factory(),
            'is_public' => fake()->boolean(),
            'status' => fake()->word(),
        ];
    }
}
