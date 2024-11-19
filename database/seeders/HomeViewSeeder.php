<?php

namespace Database\Seeders;

use App\Models\HomeView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeView::updateOrCreate([
            'id' => 1
        ],[
            'title1section' => 'Energía Inteligente para la industria',
            'title2section' => 'Ver productos',
            'url_image1section' => '/',
            'description1section' => 'Soluciones de IoT integradas en sistemas de medición de energía de alta precisión.',
            'description2section' => 'Líderes globales para asegurar solidez',
            'url_image2section' => 'url_de_la_imagen_2', 

            'title3section' => 'Optimizamos procesos de medición energética',
            'description3section' => 'Logramos eficiencias mediante una asesoría especializada según las necesidades del cliente.',
            'url_image3section' => 'url_de_la_imagen_3', 

            'title4section' => 'Flexible Portfolio',
            'description4section' => 'Portafolio amplio que incluye empresas líderes en la investigación, desarrollo, fabricación y comercialización de soluciones de gestión de energía tanto medidores de energía, analizadores de redes y calidad de energía, equipos de automatización para subestaciones y software de gestión energética. Cumpliendo con Normas IEC, IEEE, EN, ANSI, entre otras.',
            'title5section' => 'Powerful team',
            'description5section' => 'Contamos con un equipo de ingenieros especializados que desarrolla e integra soluciones basadas en el Internet de las cosas (Internet of Things - IoT) para los segmentos de Smart Grid. Smart Energy, Smart Homes y Smart Security.',
            'url_image4section' => 'url_de_la_imagen_4', 


            'footer5section' => 'Portafolio de productos',
            'description7section' => 'Cras quis sapien vel est pharetra porta.',

            'title6section' => 'Nuestros datos de contacto',
            'description6section' => 'Nullam nec orci dui. Praesent tristique facilisis quam, a egestas lorem consectetur fringilla. Suspendisse cursus erat eget ante auctor, non hendrerit ipsum egestas.',
            'title7section' => 'Ponerse en contacto'
          
        ]);
    }
}
