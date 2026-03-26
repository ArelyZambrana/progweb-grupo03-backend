<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Creamos al Administrador
    \App\Models\User::factory()->create([
        'name' => 'Admin AlfaWeb',
        'email' => 'admin@alfaweb.com',
        'role' => 'admin',
        'password' => bcrypt('password123'),
    ]);

    // 2. Creamos al Instructor
    \App\Models\User::factory()->create([
        'name' => 'Profesor Juan',
        'email' => 'instructor@alfaweb.com',
        'role' => 'instructor',
        'password' => bcrypt('password123'),
    ]);

    // 3. Creamos al Estudiante
    \App\Models\User::factory()->create([
        'name' => 'Estudiante Maria',
        'email' => 'estudiante@alfaweb.com',
        'role' => 'estudiante',
        'password' => bcrypt('password123'),
    ]);
    }
}