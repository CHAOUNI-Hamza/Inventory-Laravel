<?php

namespace Database\Factories;

use App\Models\CategoryBdc;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryBdc>
 */
class CategoryBdcFactory extends Factory
{
    protected $model = CategoryBdc::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
