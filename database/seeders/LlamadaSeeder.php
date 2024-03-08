<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Llamada;
use Carbon\Carbon;

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
        $llamada1->creating(function ($llamada) {
            $llamada->fecha = Carbon::now();
        });
        $llamada1->save();

        $llamada2 = new Llamada;
        $llamada2->cuenta_id = 1;
        $llamada2->contacto_id = 2;
        $llamada2->creating(function ($llamada) {
            $llamada->fecha = Carbon::now();
        });
        $llamada2->save();

        $llamada3 = new Llamada;
        $llamada3->cuenta_id = 1;
        $llamada3->contacto_id = 3;
        $llamada3->creating(function ($llamada) {
            $llamada->fecha = Carbon::now();
        });
        $llamada3->save();
    }
}
