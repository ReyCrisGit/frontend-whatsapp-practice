<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grupo1 = new Grupo;
        $grupo1->nombre = "The Avengers";
        $grupo1->descripcion = "Los héroes más poderosos de planeta";
        $grupo1->administrador_id = 1;
        $grupo1->save();

        $grupo2 = new Grupo;
        $grupo2->nombre = "Secret Invation";
        $grupo2->descripcion = "Serie completa en 4K";
        $grupo2->administrador_id = 1;
        $grupo2->save();

        $grupo3 = new Grupo;
        $grupo3->nombre = "Nuevo proyecto";
        $grupo3->descripcion = "Desarrollo de un sistema web de ventas";
        $grupo3->administrador_id = 1;
        $grupo3->save();

        $grupo4 = new Grupo;
        $grupo4->nombre = "OTB";
        $grupo4->descripcion = "Comunicacion 24/7";
        $grupo4->administrador_id = 1;
        $grupo4->save();
    }
}
