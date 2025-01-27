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
        $cat = ['Plan Duo', 'Internet Fibra Óptica','Televisión por cable'];
        $cat2 = ['Internet + Televisión por cable', 
                'Conexión 100% fibra óptica',
                'Conexión 100% fibra óptica'];
        $ids = [1, 2, 3];
        for ($i = 0; $i < 3; $i++) {
            Category::create([
                'id' => $ids[$i],
                'name' => $cat[$i],
                'description' => $cat2[$i],
                'status' => 1,
                'visible' => 1,
            ]);
        }
    }
}
