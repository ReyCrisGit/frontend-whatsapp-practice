<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chat;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chat1 = new Chat;
        $chat1->cuenta_id = 1;
        $chat1->contacto_id = 5;
        $chat1->mensaje = "¿Dónde estás?";
        $chat1->fecha = "2024-10-12 16:55";
        $chat1->save();
        
        $chat2 = new Chat;
        $chat2->cuenta_id = 1;
        $chat2->contacto_id = 2;
        $chat2->mensaje = "El mundo esta en peligro";
        $chat2->fecha = "2024-10-13 16:55";
        $chat2->save();

        $chat3 = new Chat;
        $chat3->cuenta_id = 2;
        $chat3->contacto_id = 1;
        $chat3->mensaje = "Un gran poder conlleva una gran responsabilidad";
        $chat3->fecha = "2024-10-14 16:55";
        $chat3->save();

        $chat4 = new Chat;
        $chat4->cuenta_id = 2;
        $chat4->contacto_id = 3;
        $chat4->mensaje = "Hola Capitan";
        $chat4->fecha = "2024-11-10 16:55";
        $chat4->save();

        $chat5 = new Chat;
        $chat5->cuenta_id = 3;
        $chat5->contacto_id = 1;
        $chat5->mensaje = "Peter?";
        $chat5->fecha = "2024-10-12 16:55";
        $chat5->save();
        
        $chat6 = new Chat;
        $chat6->cuenta_id = 3;
        $chat6->contacto_id = 4;
        $chat6->mensaje = "La señal";
        $chat6->fecha = "2024-11-02 16:55";
        $chat6->save();
    }
}
