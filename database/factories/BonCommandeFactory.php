<?php

namespace Database\Factories;

use App\Models\BonCommande;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BonCommande>
 */
class BonCommandeFactory extends Factory
{
    protected $model = BonCommande::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ref' => $this->faker->unique()->numerify('BDC-#####'),
            'categorie_bdc_id' => \App\Models\CategoryBdc::factory(),
            'date' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
