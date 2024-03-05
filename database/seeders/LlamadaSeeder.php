<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Llamada;

class LlamadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $llamada1 = new Llamada;
        $llamada1->cuenta_id = 1;
        $llamada1->contacto_id = 1;
        $llamada1->fecha = "2024-10-10 16:55";
        $llamada1->save();

        $llamada2 = new Llamada;
        $llamada2->cuenta_id = 2;
        $llamada2->contacto_id = 1;
        $llamada2->fecha = "2024-10-10 16:55";
        $llamada2->save();

        $llamada3 = new Llamada;
        $llamada3->cuenta_id = 3;
        $llamada3->contacto_id = 1;
        $llamada3->fecha = "2024-10-10 16:55";
        $llamada3->save();
    }
}
