<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Message;


class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 5; $i++) {
            Message::create([
                'full_name' => 'Usuario ' . $i,
                'email' => 'usuario' . $i . '@example.com',
                'phone' => '555-555-' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'message' => 'Mensaje de ejemplo ' . $i,
                'status' => rand(0, 1),
                'is_read' => rand(0, 1),
            ]);
        }
    }
}
