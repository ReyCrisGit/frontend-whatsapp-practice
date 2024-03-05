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
        $grupo3->descripcion = "Pelicula en grabación en espera a estrenarse en 2026";
        $grupo3->administrador_id = 2;
        $grupo3->save();

        $grupo4 = new Grupo;
        $grupo4->nombre = "Familia Asgard";
        $grupo4->descripcion = "Asgard no es un lugar, es su pueblo.";
        $grupo4->administrador_id = 3;
        $grupo4->save();
    }
}
