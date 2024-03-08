<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chat;
use Carbon\Carbon;

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
        $chat1->creating(function ($chat) {
            $chat->fecha = Carbon::now();
        });
        $chat1->save();
        
        $chat2 = new Chat;
        $chat2->cuenta_id = 1;
        $chat2->contacto_id = 2;
        $chat2->mensaje = "Tienes que ver la serie 40 y 20";
        $chat2->creating(function ($chat) {
            $chat->fecha = Carbon::now();
        });
        $chat2->save();

        $chat3 = new Chat;
        $chat3->cuenta_id = 1;
        $chat3->contacto_id = 1;
        $chat3->mensaje = "Ve el turotial de develoteca para aprender PHP";
        $chat3->creating(function ($chat) {
            $chat->fecha = Carbon::now();
        });
        $chat3->save();

        $chat4 = new Chat;
        $chat4->cuenta_id = 1;
        $chat4->contacto_id = 3;
        $chat4->mensaje = "Hola, ¿equipo?";
        $chat4->creating(function ($chat) {
            $chat->fecha = Carbon::now();
        });
        $chat4->save();

        $chat5 = new Chat;
        $chat5->cuenta_id = 1;
        $chat5->contacto_id = 1;
        $chat5->mensaje = "¿Cristian?";
        $chat5->creating(function ($chat) {
            $chat->fecha = Carbon::now();
        });
        $chat5->save();
        
        $chat6 = new Chat;
        $chat6->cuenta_id = 1;
        $chat6->contacto_id = 4;
        $chat6->mensaje = "Este es la tarea:
        Repasar los conceptos básicos de HTML5, como etiquetas, atributos y estructura.
        Practicar la creación de páginas web simples con HTML.
        Validar el código HTML con herramientas online.
        Aprender a usar elementos semánticos como header, main, section, etc.";
        $chat6->creating(function ($chat) {
            $chat->fecha = Carbon::now();
        });
        $chat6->save();
    }
}
