<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourneesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tournees')->insert([
            [
                'id' => 1,
                'nom' => 'Tournée Agen Nord',
                'employe_id' => 6,
            ],
            [
                'id' => 2,
                'nom' => 'Tournée Agen Sud',
                'employe_id' => 6,
            ]
        ]);
    }
}
