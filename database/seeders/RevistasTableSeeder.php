<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RevistasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'image' => 'revistas/GzU7YSOujxgVdOE1AjvYNjhqgXl5tf2kHDLYupeD.png',
                'archivo' => 'revistas/pdf/O4ltNQLZ2Rt4oDaXFOHA4xOPgukF3ijE8WFejqWU.pdf',
                'volumen' => '1',
                'numero' => '1',
                'fecha' => 'Enero a Junio 2011',
                'user_id' => 1,
                'created_at' => Carbon::parse('2020-01-17 20:54:52'),
                'updated_at' => Carbon::parse('2024-04-18 23:13:31'),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'image' => 'revistas/4T2zcV5CcOLHeMNOXXuXzCWGz9tmRyRHKXIrLK7E.jpg',
                'archivo' => 'Tripa-Bucomaxilofacial-2012.pdf',
                'volumen' => '2',
                'numero' => '1',
                'fecha' => 'Enero a Diciembre 2012',
                'user_id' => 1,
                'created_at' => Carbon::parse('2020-01-17 20:54:52'),
                'updated_at' => Carbon::parse('2024-04-18 23:15:20'),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'image' => 'revistas/bHwZMxDtM2fynaerp0AGefSMOgEm8Ce9QODxstcm.png',
                'archivo' => 'revistas/pdf/KtwyNeUWwu8UYjhkv29uaCnxzfwlEofeoFLFlJTI.pdf',
                'volumen' => '3',
                'numero' => '1',
                'fecha' => 'Enero a Junio 2013',
                'user_id' => 1,
                'created_at' => Carbon::parse('2020-01-17 20:54:52'),
                'updated_at' => Carbon::parse('2024-04-18 23:15:48'),
                'deleted_at' => null,
            ],
        ];

        DB::table('revistas')->insert($data);
    }
}
