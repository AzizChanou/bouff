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
            'name' => 'Fast Food',
            'category_logo_path' => '/storage/category/fastfood.png',
            'description' => 'Boisson liquide accompagnants tout mets',
        ]);

        \App\Models\FoodCategory::factory()->create([
            'name' => 'Plat Principal',
            'category_logo_path' => '/storage/category/principal.png',
            'description' => 'Plats de resistance',
        ]);

        \App\Models\FoodCategory::factory()->create([
            'name' => 'Boisson',
            'category_logo_path' => '/storage/category/boisson.png',
            'description' => 'Boisson liquide accompagnants tout mets',
        ]);

        \App\Models\FoodCategory::factory()->create([
            'name' => 'Snack',
            'category_logo_path' => '/storage/category/snack.png',
            'description' => 'Nourriture plein pour les petits creux',
        ]);

        \App\Models\FoodCategory::factory()->create([
            'name' => 'Dessert',
            'category_logo_path' => '/storage/category/dessert.png',
            'description' => 'Boisson liquide accompagnants tout mets',
        ]);

        \App\Models\FoodCategory::factory()->create([
            'name' => 'Japonais',
            'category_logo_path' => '/storage/category/japonais.png',
            'description' => 'Nourriture plein pour les petits creux',
        ]);

        \App\Models\User::factory(2)->create();

        \App\Models\User::factory(3)->create([
            'rule' => 'eatery'
        ])->each(function ($user) {
            Eatery::factory()->create([
                'user_id' => $user->id
            ])->each(function ($eatery) {
                Food::factory(5)->create([
                    'food_category_id' => rand(1, 5),
                    'eatery_id' => $eatery->id,
                ]);
            });
        });

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

        \App\Models\User::factory()->create([
            'phone' => '66485160',
        ]);
    }
}
