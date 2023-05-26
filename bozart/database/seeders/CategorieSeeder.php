<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* CATEGORIE */
        Categorie::create([
            'categorie' => 'Art plastique',
        ]);

        Categorie::create([
            'categorie' => 'Peinture',
        ]);

        Categorie::create([
            'categorie' => 'Stulture',
        ]);
    }
}
