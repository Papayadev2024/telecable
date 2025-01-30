<?php

namespace Database\Seeders;

use App\Models\ContactoView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactoViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactoView::updateOrCreate([
            'id' => 1
        ],[

            'subtitle1section' => '¡Estamos Aquí para *Ayudarte!*',
            'title1section' => 'Ponte en contacto con nosotros y resolveremos todas tus dudas.',
            'url_image1section' => '',

            'title2section' => '*FAQ:* Encuentra la Información que Buscas',
            'description2section' => 'Respuestas a las Preguntas Más Comunes',

        ]);
    }
}
