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
        $cat = ['Energía Flexible', 'Energía de Precisión'];
        $cat2 = ['Lo que no se mide, no se optimiza. Soluciones integrales para la gestión energética en plantas industriales y locales comerciales. Calcula balances de energía para detectar hurtos, pérdidas en cables y transformadores, Ten el control de tus consumos y logra la máxima optimización.', 
                'Exactitud en consumos. Equipos de medición de energía eléctrica para aplicaciones comerciales industriales de alta precisión. Calcula el consumo energético y la proyección de demanda logrando optimizarlos y validar la facturación mensual.'];
        $ids = [1, 2];
        for ($i = 0; $i < 2; $i++) {
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
