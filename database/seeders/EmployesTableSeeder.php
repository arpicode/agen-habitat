<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employes')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'nom' => 'c',
                'prenom' => 'christophe',
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'nom' => 'h',
                'prenom' => 'laurine',
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'nom' => 's',
                'prenom' => 'marion',
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'nom' => 'f',
                'prenom' => 'matthieu',
            ],
            [
                'id' => 5,
                'user_id' => 5,
                'nom' => 'd',
                'prenom' => 'valentin',
            ],
            [
                'id' => 6,
                'user_id' => 6,
                'nom' => 'a',
                'prenom' => 'admin',
            ],
            [
                'id' => 7,
                'user_id' => 7,
                'nom' => 'a',
                'prenom' => 'super',
            ],
            [
                'id' => 8,
                'user_id' => 8,
                'nom' => 'u',
                'prenom' => 'user',
            ],
        ]);
    }
}
