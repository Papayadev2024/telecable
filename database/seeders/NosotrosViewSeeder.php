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
            'subtitle1section' => 'Nosotros',
            'title1section' => 'Conexión que',
            'title1section2' => 'Te Impulsa',
            'description1section' => 'Ofrecemos internet rápido y confiable para hogares y empresas, con planes flexibles y soporte dedicado. Mejora tu conexión con velocidades que se adaptan a tus necesidades y disfruta de una experiencia sin interrupciones.',

            
            'title2section' => '100%',
            'subtitle2section' => 'Red fibra óptica',
            'url_image2section' => '',

            'title3section' => '24/7',
            'subtitle3section' => 'Atención permanente',
            'url_image3section' => '',

            'subtitle4section' => 'Valores',
            'title4section' => 'Conexión con Propósito:',
            'title4section2' => 'Nuestros Valores',
            'description4section' => 'Nos impulsan valores que reflejan nuestro compromiso de ofrecer la mejor experiencia de conexión para nuestros clientes, guiados siempre por la innovación y el servicio de calidad.',

        ]);
    }
}
