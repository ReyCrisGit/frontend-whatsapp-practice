<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cuenta;

class CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cuenta1 = new Cuenta;
        $cuenta1->nombre = "Cristian";
        $cuenta1->apellido = "Barrios";
        $cuenta1->correo = "ejemplo@gmail.com";
        $cuenta1->numero_celular = "68641210";
        $cuenta1->contrasenia = "cuenta1";
        $cuenta1->save();
        
        /* $cuenta2 = new Cuenta;
        $cuenta2->nombre = "Andrew";
        $cuenta2->apellido = "Garfield";
        $cuenta2->correo = "andrew@gmail.com";
        $cuenta2->numero_celular = "71254685";
        $cuenta2->contrasenia = "cuenta2";
        $cuenta2->save();

        $cuenta3 = new Cuenta;
        $cuenta3->nombre = "Emma";
        $cuenta3->apellido = "Stone";
        $cuenta3->correo = "emma@gmail.com";
        $cuenta3->numero_celular = "74856542";
        $cuenta3->contrasenia = "cuenta3";
        $cuenta3->save(); */
    }
}
