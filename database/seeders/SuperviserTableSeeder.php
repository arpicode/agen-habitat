<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperviserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('superviser')->insert([
            [
                'employe_id' => 1,
                'logement_id' => 1,
            ],
            [
                'employe_id' => 1,
                'logement_id' => 2,
            ],
            [
                'employe_id' => 1,
                'logement_id' => 3,
            ],

            [
                'employe_id' => 2,
                'logement_id' => 4,
            ],
            [
                'employe_id' => 2,
                'logement_id' => 5,
            ],
            [
                'employe_id' => 2,
                'logement_id' => 6,
            ],

            [
                'employe_id' => 3,
                'logement_id' => 7,
            ],
            [
                'employe_id' => 3,
                'logement_id' => 8,
            ],
            [
                'employe_id' => 3,
                'logement_id' => 9,
            ],

            [
                'employe_id' => 4,
                'logement_id' => 10,
            ],
            [
                'employe_id' => 4,
                'logement_id' => 11,
            ],
            [
                'employe_id' => 4,
                'logement_id' => 12,
            ],

            [
                'employe_id' => 5,
                'logement_id' => 13,
            ],
            [
                'employe_id' => 5,
                'logement_id' => 14,
            ],
            [
                'employe_id' => 5,
                'logement_id' => 15,
            ],

            [
                'employe_id' => 6,
                'logement_id' => 1,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 2,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 3,
            ],

            [
                'employe_id' => 6,
                'logement_id' => 4,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 5,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 6,
            ],

            [
                'employe_id' => 6,
                'logement_id' => 7,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 8,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 9,
            ],

            [
                'employe_id' => 6,
                'logement_id' => 10,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 11,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 12,
            ],

            [
                'employe_id' => 6,
                'logement_id' => 13,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 14,
            ],
            [
                'employe_id' => 6,
                'logement_id' => 15,
            ],
        ]);
    }
}
