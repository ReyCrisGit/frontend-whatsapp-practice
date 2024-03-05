<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comunidad;
use App\Models\Grupo;

class ComunidadGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener las comunidades
        $comunidades = Comunidad::all();

        // Obtener los grupos
        $grupos = Grupo::all();

        // Insertar registros en la tabla `comunidad_grupo`

        foreach ($comunidades as $comunidad) {
            foreach ($grupos as $grupo) {
                $comunidad->grupos()->attach($grupo->id);
            }
        }
    }
}
