<?php

namespace Database\Seeders;

use App\Models\InnovacionView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InnovacionViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InnovacionView::updateOrCreate([
            'id' => 1
        ],[
            'title1section' => 'Innovación tecnológica',
            'subtitle1section' => 'Creamos tecnología de vanguardia',
            'url_image1section' => '',
            
            'title2section' => 'Hardware',
            'description2section' => 'Conectamos dispositivos a la nube. Desarrollamos e integramos soluciones basadas en el Internet de las cosas (Internet of Things - IoT) para proyectos de Smart Grid a la medida. Utilizamos protocolos de comunicación que permiten la escabilidad de nuestras soluciones y flexibilidad para la integración a diferentes industrias. Energía inteligente.',
            'title3section' => 'Software',
            'description3section' => 'Software de administración de energía, ofrece un conjunto de soluciones: desde facturación, monitoreo, eficiencia energética y respuesta a la demanda hasta análisis exhaustivos de calidad de energía y soporte de procesos centrales de planificación y previsión para generadores, transmisores y distribuidores de energía e también para grandes proyectos residenciales, edificios de oficinas, centros comerciales, entre otros.' ,
            'url_image3section' => '',

            'title4section' => 'Servicios' ,
            'description4section' => 'Donec non velit non elit euismod varius eu id tellus. Nunc ultrices mauris quis facilisis sollicitudin. Vestibulum convallis diam et nulla aliquet fringilla eget ut massa. Proin ac consequat neque. Pellentesque arcu nisi, bibendum eget gravida sed.' ,

        ]);
    }
}
