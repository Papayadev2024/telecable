<?php

namespace Database\Seeders;

use App\Models\ProductosView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductosView::updateOrCreate([
            'id' => 1
        ],[
            'title1section' => 'Portafolio de productos',
            'subtitle1section' => 'Líderes globales para asegurar solidez',
            'title2section' => 'Necesitas ayuda?',
            'description2section' => 'Donec non velit non elit euismod varius eu id tellus. Nunc ultrices mauris quis facilisis sollicitudin. Vestibulum convallis diam et nulla aliquet fringilla eget ut massa. Proin ac consequat neque. Pellentesque arcu nisi, bibendum eget gravida sed, condimentum id nulla.',
            'url_image2section' => '/',
            'title3section' => 'Energía Inteligente',
            'description3section' => 'Ofrecemos soluciones avanzadas de energía eléctrica para optimizar el consumo energético en la industria. Nuestros sistemas de medición inteligente, análisis de demanda y gestión de energía permiten maximizar la eficiencia operativa, reducir costos y garantizar la sostenibilidad.',
        ]);
    }
}
