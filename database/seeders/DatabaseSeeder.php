<?php

namespace Database\Seeders;

use App\Models\Deliverer;
use App\Models\Eatery;
use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\FoodCategory::factory()->create([
            'name' => 'Vegan',
            'category_logo_path' => 'boisson.png',
            'description' => 'Boisson liquide accompagnants tout mets',
        ]);
        \App\Models\FoodCategory::factory()->create([
            'name' => 'Snack',
            'category_logo_path' => 'snack.png',
            'description' => 'Nourriture rapide pour les petits creux',
        ]);

        \App\Models\FoodCategory::factory()->create([
            'name' => 'Bouff',
            'category_logo_path' => 'bouff.png',
            'description' => 'Plats de resistance',
        ]);


        \App\Models\FoodCategory::factory()->create([
            'name' => 'Appéritif',
            'category_logo_path' => 'boisson.png',
            'description' => 'Boisson liquide accompagnants tout mets',
        ]);

        \App\Models\FoodCategory::factory()->create([
            'name' => 'Résistance',
            'category_logo_path' => 'snack.png',
            'description' => 'Nourriture plein pour les petits creux',
        ]);

        \App\Models\User::factory(2)->create();

        /*   \App\Models\User::factory(3)->create([
            'rule' => 'eatery'
        ])->each(function ($user) {
            Eatery::factory()->create([
                'user_id' => $user->id
            ])->each(function ($eatery) {
                Food::factory(5)->create([
                    'food_category_id' => rand(1, 1),
                    'eatery_id' => $eatery->id,
                ]);
            });
        }); */

        \App\Models\User::factory(3)->create([
            'rule' => 'deliverer'
        ])->each(function ($user) {
            Deliverer::factory()->create([
                'user_id' => $user->id
            ]);
        });

        \App\Models\User::factory()->create([
            'phone' => '69457894',
            'rule' => 'deliverer'
        ])->each(function ($user) {
            Deliverer::factory()->create([
                'user_id' => $user->id
            ]);
        });
    }
}
