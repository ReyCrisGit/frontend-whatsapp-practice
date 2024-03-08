<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Seeders
        $this->call(CuentaSeeder::class);
        $this->call(ContactoSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(ComunidadSeeder::class);
        $this->call(ChatSeeder::class);
        $this->call(LlamadaSeeder::class);
        $this->call(ComunidadContactoSeeder::class);
        $this->call(ComunidadGrupoSeeder::class);
        $this->call(ContactoGrupoSeeder::class);
        

        //Factories

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
