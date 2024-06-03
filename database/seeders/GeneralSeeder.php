<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\General;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        General::create([
            'address' => 'Av. Aramburu 1506',
            'inside' => 'Oficina 404 - Piso 4',
            'district' => 'Miraflores',
            'schedule' => "De Lunes a Viernes de 9:00am a 6:00pm y Sábados de 9:00am a 1:00pm",
            'city' => 'Lima',
            'country' => 'Perú',
            'cellphone' => '01-6556920' ,
            'office_phone' => '01-6556922' ,
            'email' => 'ventas@hpi.com.pe',
            'facebook' => 'https://www.facebook.com/people/Hydrotech-Pru-Import-EIRL/100063724503852/',
            'instagram' => 'https://www.instagram.com/hpi_peru/?hl=es',
            'youtube' => 'https://www.youtube.com/channel/UCxsk5-MS66lyPUWiV16ZbLg',
            'twitter' => '',
            'tiktok' => 'https://www.tiktok.com/@hydrotech.peru',
            'linkedin' => 'https://www.linkedin.com/company/hydrotech-peru-import-hpi/',
            'whatsapp' => '51992262598' ,
            'form_email' => 'ventas@hpi.com.pe',
            'business_hours' => 'horas',
            'mensaje_whatsapp' => 'Hola estamos atentos a lo que ud desee',
            'aboutus' => 'Dommine se encuentra interesado en ti. Si deseas tener más información sobre nuestros productos y promociones, entonces completa el siguiente formulario para contactarte o ten en cuenta nuestra ubicación, número telefónico y dirección de correo electrónico.'

        ]);
    }
}
