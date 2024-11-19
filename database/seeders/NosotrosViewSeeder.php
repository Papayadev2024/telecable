<?php

namespace Database\Seeders;

use App\Models\NosotrosView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NosotrosViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NosotrosView::updateOrCreate([
            'id' => 1
        ],[
            'title1section' => 'Nuestra historia, nuestro nacimiento',
            'description1section' => 'Nullam nec orci dui. Praesent tristique facilisis quam, a egestas lorem consectetur fringilla. Suspendisse cursus erat eget ante auctor, non hendrerit ipsum egestas. Nullam nec orci dui. Praesent tristique facilisis quam, a egestas lorem consectetur fringilla. Suspendisse cursus erat eget ante auctor, non hendrerit ipsum egestas.',
            'url_image2section' => '',

            
            'title3section' => 'Nuestras motivaciones diarias',
            'url_image4section' => '',

            'title3secondsection' => 'Misión',
            'description3secondsection' => 'Conectamos dispositivos a la nube. Desarrollamos e integramos soluciones basadas en el Internet de las cosas (Internet of Things - IoT) para proyectos de Smart Grid a la medida. Utilizamos protocolos de comunicación que permiten la escabilidad de nuestras soluciones y flexibilidad para la integración a diferentes industrias. Energía inteligente.' ,

            'title4section' => 'Visión',
            'description4section' => 'Software de administración de energía, ofrece un conjunto de soluciones: desde facturación, monitoreo, eficiencia energética y respuesta a la demanda hasta análisis exhaustivos de calidad de energía y soporte de procesos centrales de planificación y previsión para generadores, transmisores y distribuidores de energía e también para grandes proyectos residenciales, edificios de oficinas, centros comerciales, entre otros.' ,

        ]);
    }
}
