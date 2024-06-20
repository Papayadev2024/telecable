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
        $cat = ['Tratamiento de agua', 'Productos Químicos', 'Medición e Instrumentación', 'Piscinas & Spa'];
        $cat2 = ['Nuestro enfoque integral abarca desde la captación hasta la distribución del agua tratada, cumpliendo con las normativas y regulaciones locales.', 
                'Nuestros productos cumplen con altos estándares de calidad y regulaciones internacionales.',
                'Ofrecemos una amplia gama de instrumentos para el monitoreo y control de calidad de agua, análisis de suelos, alimentos y otros. Brindamos capacitación y servicio técnico para el correcto uso del producto.',
                'Somos especialistas en el tratamiento de agua para piscinas y spas. Ofrecemos una amplia gama de productos, tales como sistemas de filtración, productos químicos y accesorios.'];
        $extract = ['Soluciones Efectivas para Tratamiento de Agua',
                    'Soluciones Efectivas para Productos Químicos',
                    'Soluciones Efectivas para Medición e Instrumentación',
                    'Soluciones Efectivas para Piscinas & Spa'];
        $ids = [135, 116, 126, 127];
        for ($i = 0; $i < 4; $i++) {
            Category::create([
                'id' => $ids[$i],
                'name' => $cat[$i],
                'description' => $cat2[$i],
                'extract' => $extract[$i],
                'status' => 1,
                'visible' => 1,
            ]);
        }
    }
}
