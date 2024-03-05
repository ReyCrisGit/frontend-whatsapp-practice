<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comunidad;

class ComunidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comunidad1 = new Comunidad;
        $comunidad1->nombre = "Secret Invation";
        $comunidad1->administrador_id = 1;
        $comunidad1->descripcion = "Vengadores Unidos";
        $comunidad1->save();

        $comunidad2 = new Comunidad;
        $comunidad2->nombre = "Premios Oscar";
        $comunidad2->administrador_id = 2;
        $comunidad2->descripcion = "Nominados a los premios Oscar";
        $comunidad2->save();

        $comunidad3 = new Comunidad;
        $comunidad3->nombre = "Poor Things";
        $comunidad3->administrador_id = 3;
        $comunidad3->descripcion = "La mejor película del 2023";
        $comunidad3->save();
    }
}
