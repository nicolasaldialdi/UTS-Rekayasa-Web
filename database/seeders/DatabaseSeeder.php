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
        // Panggil SportSeeder di sini agar datanya masuk ke database
        $this->call([
            SportSeeder::class,
        ]);
    }
}