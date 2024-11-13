<?php

namespace Database\Factories;

use App\Models\Materiel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materiel>
 */
class MaterielFactory extends Factory
{
    protected $model = Materiel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->numberBetween(1, 100),
            'category_id' => \App\Models\Category::factory(),
            'bon_commande_id' => \App\Models\BonCommande::factory(),
            'stock' => $this->faker->boolean(80), // 80% probabilité d'être en stock
            'num_inventaire' => $this->faker->unique()->numerify('INV-#####'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
