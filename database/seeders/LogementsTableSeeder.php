<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LogementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('logements')->insert([
            [
                'id' => 1,
                'adresse' => '88 rue Cazade;47000;AGEN',
                'no_appt' => '12',
                'type' => 'T4',
                'annee_construction' => 2009,
                'surface_habitable' => 78,
                'debut_periode_inspection' => '2023-09-24',
                'fin_periode_inspection' => '2023-11-22',
                'locataire_id' => 11
            ],
            [
                'id' => 2,
                'adresse' => '64 rue du Clair Bocage;47000;AGEN',
                'no_appt' => '41',
                'type' => 'T4',
                'annee_construction' => 1984,
                'surface_habitable' => 65,
                'debut_periode_inspection' => '2023-02-17',
                'fin_periode_inspection' => '2023-06-14',
                'locataire_id' => 10
            ],
            [
                'id' => 3,
                'adresse' => '41 Quai des Belges;47000;AGEN',
                'no_appt' => '44',
                'type' => 'T4',
                'annee_construction' => 1990,
                'surface_habitable' => 90,
                'debut_periode_inspection' => '2023-07-19',
                'fin_periode_inspection' => '2023-10-17',
                'locataire_id' => 9
            ],
            [
                'id' => 4,
                'adresse' => '41 Rue du Palais;47000;AGEN',
                'no_appt' => '8',
                'type' => 'T2',
                'annee_construction' => 1999,
                'surface_habitable' => 88,
                'debut_periode_inspection' => '2023-02-21',
                'fin_periode_inspection' => '2023-08-29',
                'locataire_id' => 8
            ],
            [
                'id' => 5,
                'adresse' => '4 Boulevard de Normandie;47000;AGEN',
                'no_appt' => '33',
                'type' => 'T2',
                'annee_construction' => 1991,
                'surface_habitable' => 35,
                'debut_periode_inspection' => '2023-01-22',
                'fin_periode_inspection' => '2023-05-09',
                'locataire_id' => 7
            ],
            [
                'id' => 6,
                'adresse' => '38 Quai des Belges;47000;AGEN',
                'no_appt' => '20',
                'type' => 'T2',
                'annee_construction' => 1986,
                'surface_habitable' => 65,
                'debut_periode_inspection' => '2023-01-07',
                'fin_periode_inspection' => '2023-05-22',
                'locataire_id' => 6
            ],
            [
                'id' => 7,
                'adresse' => '35 Avenue des Tuileries;47000;AGEN',
                'no_appt' => '28',
                'type' => 'T4',
                'annee_construction' => 1975,
                'surface_habitable' => 75,
                'debut_periode_inspection' => '2023-09-15',
                'fin_periode_inspection' => '2023-12-12',
                'locataire_id' => 5
            ],
            [
                'id' => 8,
                'adresse' => '60 Rue Frédéric Chopin;47000;AGEN',
                'no_appt' => '9',
                'type' => 'T4',
                'annee_construction' => 2017,
                'surface_habitable' => 90,
                'debut_periode_inspection' => '2023-08-20',
                'fin_periode_inspection' => '2023-09-13',
                'locataire_id' => 4
            ],
            [
                'id' => 9,
                'adresse' => '47 rue des Nations Unies;47000;AGEN',
                'no_appt' => '47',
                'type' => 'T5',
                'annee_construction' => 1975,
                'surface_habitable' => 40,
                'debut_periode_inspection' => '2023-09-16',
                'fin_periode_inspection' => '2023-11-14',
                'locataire_id' => 3
            ],
            [
                'id' => 10,
                'adresse' => '72 Place Charles de Gaulle;47000;AGEN',
                'no_appt' => '32',
                'type' => 'T3',
                'annee_construction' => 1963,
                'surface_habitable' => 56,
                'debut_periode_inspection' => '2023-04-08',
                'fin_periode_inspection' => '2023-07-06',
                'locataire_id' => 2
            ],
            [
                'id' => 11,
                'adresse' => '77 rue Lenotre;47000;AGEN',
                'no_appt' => '38',
                'type' => 'T3',
                'annee_construction' => 1999,
                'surface_habitable' => 68,
                'debut_periode_inspection' => '2023-06-21',
                'fin_periode_inspection' => '2023-10-13',
                'locataire_id' => 1
            ],
            [
                'id' => 12,
                'adresse' => '63 Avenue des Tuileries;47000;AGEN',
                'no_appt' => '7',
                'type' => 'T3',
                'annee_construction' => 1974,
                'surface_habitable' => 62,
                'debut_periode_inspection' => '2023-06-06',
                'fin_periode_inspection' => '2023-11-01',
                'locataire_id' => 1
            ],
            [
                'id' => 13,
                'adresse' => '90 cours Jean Jaures;47000;AGEN',
                'no_appt' => '26',
                'type' => 'T3',
                'annee_construction' => 1997,
                'surface_habitable' => 70,
                'debut_periode_inspection' => '2023-02-21',
                'fin_periode_inspection' => '2023-06-18',
                'locataire_id' => 1
            ],
            [
                'id' => 14,
                'adresse' => '80 place de Miremont;47000;AGEN',
                'no_appt' => '18',
                'type' => 'T2',
                'annee_construction' => 1996,
                'surface_habitable' => 88,
                'debut_periode_inspection' => '2023-05-09',
                'fin_periode_inspection' => '2023-09-20',
                'locataire_id' => 1
            ],
            [
                'id' => 15,
                'adresse' => '94 rue de la Boétie;47000;AGEN',
                'no_appt' => '48',
                'type' => 'T3',
                'annee_construction' => 1970,
                'surface_habitable' => 58,
                'debut_periode_inspection' => '2023-02-15',
                'fin_periode_inspection' => '2023-06-14',
                'locataire_id' => 1
            ],
        ]);
    }
}
