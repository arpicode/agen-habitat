<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Ramsey\Uuid\Rfc4122\UuidV1;

class LocatairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locataires')->insert([
            [
                'id' => 1,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Mao',
                'prenom' => 'Jin',
                'email' => strtolower('JinMao@fleckens.hu'),
                'telephone' => '0681151825',
            ],
            [
                'id' => 2,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Nassar',
                'prenom' => 'Sariyah',
                'email' => strtolower('SariyahAbuBakrNassar@dayrep.com'),
                'telephone' => '0603239354',
            ],
            [
                'id' => 3,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Camus',
                'prenom' => 'Denise',
                'email' => strtolower('DeniseCamus@gustr.com'),
                'telephone' => '0634670039',
            ],
            [
                'id' => 4,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Plourde',
                'prenom' => 'Nicolas',
                'email' => strtolower('NicolasPlourde@rhyta.com'),
                'telephone' => '0601950322',
            ],
            [
                'id' => 5,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Busch',
                'prenom' => 'Franziska',
                'email' => strtolower('FranziskaBusch@jourrapide.com'),
                'telephone' => '0677204583',
            ],
            [
                'id' => 6,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Rutkowska',
                'prenom' => 'Lucyna',
                'email' => strtolower('LucynaRutkowska@teleworm.us'),
                'telephone' => '0675828023',
            ],
            [
                'id' => 7,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Abendroth',
                'prenom' => 'Lena',
                'email' => strtolower('LenaAbendroth@jourrapide.com'),
                'telephone' => '0645536397',
            ],
            [
                'id' => 8,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Masih',
                'prenom' => 'Mahmoud',
                'email' => strtolower('MahmoudAzimMasih@dayrep.com'),
                'telephone' => '0686541310',
            ],
            [
                'id' => 9,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Finkel',
                'prenom' => 'Karolin',
                'email' => strtolower('KarolinFinkel@rhyta.com'),
                'telephone' => '0684250311',
            ],
            [
                'id' => 10,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Grace',
                'prenom' => 'Logan',
                'email' => strtolower('LoganGrace@dayrep.com'),
                'telephone' => '0626945820',
            ],
            [
                'id' => 11,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Gilbert',
                'prenom' => 'Imogen',
                'email' => strtolower('ImogenGilbert@cuvox.de'),
                'telephone' => '0634654203',
            ],
            [
                'id' => 12,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Hsiung',
                'prenom' => 'Li',
                'email' => strtolower('LiHsiung@fleckens.hu'),
                'telephone' => '0687599367',
            ],
            [
                'id' => 13,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Pawlak',
                'prenom' => 'Wiktor',
                'email' => strtolower('WiktorPawlak@armyspy.com'),
                'telephone' => '0658436366',
            ],
            [
                'id' => 14,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Sinclair',
                'prenom' => 'Harvey',
                'email' => strtolower('HarveySinclair@rhyta.com'),
                'telephone' => '0624667251',
            ],
            [
                'id' => 15,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Rossignol',
                'prenom' => 'Jacques',
                'email' => strtolower('JacquesRossignol@cuvox.de'),
                'telephone' => '0637662306',
            ],
            [
                'id' => 16,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Leclerc',
                'prenom' => 'Clovis',
                'email' => strtolower('ClovisLeclerc@dayrep.com'),
                'telephone' => '0666315935',
            ],
            [
                'id' => 17,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Lucas',
                'prenom' => 'Jasmine',
                'email' => strtolower('JasmineLucas@jourrapide.com'),
                'telephone' => '0647540056',
            ],
            [
                'id' => 18,
                'no_locataire' => UuidV1::uuid1(),
                'nom' => 'Parent',
                'prenom' => 'Marmion',
                'email' => strtolower('MarmionParent@fleckens.hu'),
                'telephone' => '0652467467',
            ],
        ]);
    }
}
