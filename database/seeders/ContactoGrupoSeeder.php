<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacto;
use App\Models\Grupo;

class ContactoGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener los contactos
        $contactos = Contacto::all();

        // Obtener los grupos
        $grupos = Grupo::all();

        // Insertar registros en la tabla `contacto_grupo`

        foreach ($contactos as $contacto) {
            // Asociar algunos grupos aleatorios al contacto actual
            $gruposAleatorios = $grupos->random(rand(1, count($grupos)));

            foreach ($gruposAleatorios as $grupo) {
                $contacto->grupos()->attach($grupo->id);
            }
        }
    }
}
