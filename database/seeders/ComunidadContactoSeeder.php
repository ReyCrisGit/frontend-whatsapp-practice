<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comunidad;
use App\Models\Contacto;

class ComunidadContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener las comunidades
        $comunidades = Comunidad::all();

        // Obtener los contactos
        $contactos = Contacto::all();

        // Insertar registros en la tabla `comunidad_contacto`

        foreach ($comunidades as $comunidad) {
            foreach ($contactos as $contacto) {
                $comunidad->contactos()->attach($contacto->id);
            }
        }
    }
}
