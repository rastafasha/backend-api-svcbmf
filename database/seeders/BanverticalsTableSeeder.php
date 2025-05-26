<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanverticalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banverticals')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'avatar' => 'banverticals/dQah7inkHEDFVHxxT3xv9j52sFu54iTWN8cVV7KL.jpg',
                'titulo' => 'publicidad svcbmf',
                'target' => '_self',
                'enlace' => 'contacto',
                'is_active' => 1,
                'created_at' => '2019-12-18 06:29:19',
                'updated_at' => '2024-04-18 22:18:54',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'avatar' => 'banverticals/lPw9CyPYuMUZjMT2l3mLTsRUeCER1w3AcjwpPc5q.jpg',
                'titulo' => 'PRF Group',
                'target' => '_blank',
                'enlace' => 'http://www.prfgroup.net/',
                'is_active' => 0,
                'created_at' => '2019-12-18 06:29:35',
                'updated_at' => '2024-04-18 22:19:03',
                'deleted_at' => null,
            ],
        ]);
    }
}
