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
        $comunidad1->nombre = "Universitarios";
        $comunidad1->administrador_id = 1;
        $comunidad1->descripcion = "Unidos";
        $comunidad1->save();

        $comunidad2 = new Comunidad;
        $comunidad2->nombre = "UCATEC";
        $comunidad2->administrador_id = 1;
        $comunidad2->descripcion = "Universidad Privada";
        $comunidad2->save();

        $comunidad3 = new Comunidad;
        $comunidad3->nombre = "Actualizacion";
        $comunidad3->administrador_id = 1;
        $comunidad3->descripcion = "Materia de noveno semestre";
        $comunidad3->save();
    }
}
