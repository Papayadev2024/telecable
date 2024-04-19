<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 5; $i++) {
            Category::create([
                'name' => 'Categoria ' . $i,
                'description' => 'Descripcion de la categoria Numero ' . $i,
                'status' => 1,
                'visible' => 1,
            ]);
        }
    }
}
