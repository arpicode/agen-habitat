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
        $this->call(UsersTableSeeder::class);
        $this->call(EmployesTableSeeder::class);
        $this->call(LocatairesTableSeeder::class);
        $this->call(LogementsTableSeeder::class);
        $this->call(SuperviserTableSeeder::class);
        $this->call(TourneesTableSeeder::class);
    }
}
