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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin Inventaris',
            'username' => 'admin',
            'roles' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Staf 1 Inventaris',
            'username' => 'staf1',
            'roles' => 'staf',
            'email' => 'staf1@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Staf 2 Inventaris',
            'username' => 'staf2',
            'roles' => 'staf',
            'email' => 'staf2@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
