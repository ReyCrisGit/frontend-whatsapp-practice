<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacto1 = new Contacto;
        $contacto1->nombre = "Peter";
        $contacto1->apellido = "Parker";
        $contacto1->numero_celular = "72214585";
        $contacto1->pais = "Estados Unidos";
        $contacto1->cuenta_id = 1;
        $contacto1->save();

        $contacto2 = new Contacto;
        $contacto2->nombre = "Tony";
        $contacto2->apellido = "Stark";
        $contacto2->numero_celular = "71115789";
        $contacto2->pais = "Estados Unidos";
        $contacto2->cuenta_id = 1;
        $contacto2->save();

        $contacto3 = new Contacto;
        $contacto3->nombre = "Steve";
        $contacto3->apellido = "Rogers";
        $contacto3->numero_celular = "77456582";
        $contacto3->pais = "Estados Unidos";
        $contacto3->cuenta_id = 1;
        $contacto3->save();

        $contacto4 = new Contacto;
        $contacto4->nombre = "Natasha";
        $contacto4->apellido = "Romanoff";
        $contacto4->numero_celular = "71724820";
        $contacto4->pais = "Rusia";
        $contacto4->cuenta_id = 2;
        $contacto4->save();

        $contacto5 = new Contacto;
        $contacto5->nombre = "Carol";
        $contacto5->apellido = "Danvers";
        $contacto5->numero_celular = "74758181";
        $contacto5->pais = "Estados Unidos";
        $contacto5->cuenta_id = 2;
        $contacto5->save();

        $contacto6 = new Contacto;
        $contacto6->nombre = "Wanda";
        $contacto6->apellido = "Maximoff";
        $contacto6->numero_celular = "73005245";
        $contacto6->pais = "Sokovia";
        $contacto6->cuenta_id = 2;
        $contacto6->save();

        $contacto7 = new Contacto;
        $contacto7->nombre = "Thor";
        $contacto7->apellido = "Odinson";
        $contacto7->numero_celular = "77001210";
        $contacto7->pais = "Asgard";
        $contacto7->cuenta_id = 3;
        $contacto7->save();

        $contacto8 = new Contacto;
        $contacto8->nombre = "Loki";
        $contacto8->apellido = "Laufeyson";
        $contacto8->numero_celular = "69652120";
        $contacto8->pais = "Asgard";
        $contacto8->cuenta_id = 3;
        $contacto8->save();

        $contacto9 = new Contacto;
        $contacto9->nombre = "Hela";
        $contacto9->apellido = "De Xu Wenwu";
        $contacto9->numero_celular = "72214585";
        $contacto9->pais = "Asgard";
        $contacto9->cuenta_id = 3;
        $contacto9->save();

        $contacto10 = new Contacto;
        $contacto10->nombre = "Jane";
        $contacto10->apellido = "Foster";
        $contacto10->numero_celular = "68651024";
        $contacto10->pais = "Estados Unidos";
        $contacto10->cuenta_id = 3;
        $contacto10->save();
    }
}
