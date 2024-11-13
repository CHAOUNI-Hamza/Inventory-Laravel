<?php

namespace Database\Factories;

use App\Models\Affectation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Affectation>
 */
class AffectationFactory extends Factory
{
    protected $model = Affectation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'materiel_id' => \App\Models\Materiel::factory(),
            'service_id' => \App\Models\Service::factory(),
            'assigned_by' => \App\Models\User::factory(),
            'quantity' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
