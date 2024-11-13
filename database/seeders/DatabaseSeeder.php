<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Materiel;
use App\Models\Affectation;
use App\Models\BonCommande;
use App\Models\CategoryBdc;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\CategoryBdc::factory(5)->create();
        \App\Models\Service::factory(10)->create();
        \App\Models\User::factory(20)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\BonCommande::factory(10)->create();
        \App\Models\Materiel::factory(50)->create();
        \App\Models\Affectation::factory(30)->create();
    }
}
