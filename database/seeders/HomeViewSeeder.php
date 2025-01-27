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
            'title1section' => 'TV Online: Planes de Televisión',
            'description1section' => 'Disfruta el mejor streaming con TV Full + Internet fibra',
            'url_image1section' => '',

            'title2section' => 'Fibra óptica: Planes de Internet',
            'description2section' => 'Vive la mejor programación y no te pierdas nada!',
            'description2section2' => '*Planes y precios validos para contrataciones desde el 25 de noviembre hasta el 31 de diciembre 2024', 

            'title3section' => 'Conoce Nuestro Servicio',
            'description3section' => 'Conexión Confiable,',
            'description3section2' => 'Elegida por Miles',
            'description3section3' => '<p>En Telecable, somos expertos en conectar a las personas con tecnología de última generación. Ofrecemos soluciones de internet de fibra óptica diseñadas para brindar velocidad, estabilidad y confiabilidad, siempre adaptándonos a las necesidades de nuestros clientes.</p><p>Nuestra misión es garantizar una experiencia de conectividad excepcional, respaldada por un equipo comprometido y atención personalizada. Creemos que el internet no solo conecta dispositivos, sino también personas, sueños e ideas.</p><p>Descubre cómo nuestro servicio puede transformar tu forma de navegar y conectar con el mundo.</p>',
            'url_image3section' => 'url_de_la_imagen_3', 

            'title4section' => 'Conexión veloz y confiable',
            'description4section' => '¿Por qué elegir',
            'description4section2' => 'Internet de Fibra Óptica?', 

            'titlebenefit1' => 'Conexión Estable', 
            'descriptionbenefit1' => 'Resiste interferencias externas, garantizando un servicio confiable incluso en horarios pico.', 
            'titlebenefit2' => 'Velocidad Superior', 
            'descriptionbenefit2' => 'La fibra óptica ofrece mayor rapidez para descargas, streaming y videollamadas sin interrupciones.', 
            'titlebenefit3' => 'Alta Capacidad', 
            'descriptionbenefit3' => 'Soporta múltiples dispositivos conectados sin pérdida de calidad.', 

            'url_image4section' => 'url_de_la_imagen_4', 


            // 'footer5section' => 'Portafolio de productos',
            // 'description7section' => 'Cras quis sapien vel est pharetra porta.',

            // 'title6section' => 'Nuestros datos de contacto',
            // 'description6section' => 'Nullam nec orci dui. Praesent tristique facilisis quam, a egestas lorem consectetur fringilla. Suspendisse cursus erat eget ante auctor, non hendrerit ipsum egestas.',
            // 'title7section' => 'Ponerse en contacto'
          
        ]);
    }
}
