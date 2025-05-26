<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanhorizontalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banhorizontals')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'avatar' => 'banhorizontals/NP9eSNm2yd6vP1F8SDNQtUAPSfpfg6gPsaKI57Xn.jpg',
                'titulo' => 'directorio svcbmf',
                'target' => '_self',
                'enlace' => 'directorio',
                'is_active' => 1,
                'created_at' => '2019-12-18 06:13:26',
                'updated_at' => '2024-04-18 22:27:47',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'avatar' => 'banhorizontals/39ooIjiMpjlrU6521SzMAA6srSydzpQzMbLCbfKs.jpg',
                'titulo' => 'publicidad',
                'target' => '_self',
                'enlace' => 'contacto',
                'is_active' => 1,
                'created_at' => '2019-12-21 04:38:59',
                'updated_at' => '2024-04-18 22:27:30',
                'deleted_at' => null,
            ],
        ]);
    }
}
