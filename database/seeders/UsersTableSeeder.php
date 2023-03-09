<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'email' => "christophe@ah.fr",
                'mot_de_passe' => bcrypt("\$123"),
                'role' => 'inspecteur',
                'est_actif' => true,
            ],
            [
                'id' => 2,
                'email' => "laurine@ah.fr",
                'mot_de_passe' => bcrypt("\$123"),
                'role' => 'inspecteur',
                'est_actif' => true,
            ],
            [
                'id' => 3,
                'email' => "marion@ah.fr",
                'mot_de_passe' => bcrypt("\$123"),
                'role' => 'inspecteur',
                'est_actif' => true,
            ],
            [
                'id' => 4,
                'email' => "matthieu@ah.fr",
                'mot_de_passe' => bcrypt("\$123"),
                'role' => 'inspecteur',
                'est_actif' => true,
            ],
            [
                'id' => 5,
                'email' => "valentin@ah.fr",
                'mot_de_passe' => bcrypt("\$123"),
                'role' => 'inspecteur',
                'est_actif' => true,
            ],
            [
                'id' => 6,
                'email' => "admin@ah.fr",
                'mot_de_passe' => bcrypt("\$123"),
                'role' => 'admin',
                'est_actif' => true,
            ],
            [
                'id' => 7,
                'email' => "super@ah.fr",
                'mot_de_passe' => bcrypt("\$123"),
                'role' => 'super',
                'est_actif' => true,
            ],
            [
                'id' => 8,
                'email' => "user@ah.fr",
                'mot_de_passe' => bcrypt("\$123"),
                'role' => 'super',
                'est_actif' => false,
            ],
        ]);
    }
}
