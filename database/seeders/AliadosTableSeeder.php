<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AliadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aliados')->insert([
            [
                'id' => 1,
                'title' => 'Colegio de Odontologos de Venezuela',
                'user_id' => 1,
                'avatar' => 'aliados/UWawY8TyuF1YSgCFtINlzSHhdm1YSWdNhxPItl9L.jpg',
                'is_active' => 1,
                'enlace' => 'https://www.elcov.org/',
                'target' => '_blank',
                'created_at' => '2018-10-27 08:12:09',
                'updated_at' => '2024-04-18 22:34:33',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'AAOMS',
                'user_id' => 1,
                'avatar' => 'aliados/HymN3n8buOXA3UyH01TO6OttY7uJc3NDh7G6cJSM.jpg',
                'is_active' => 1,
                'enlace' => 'https://www.aaoms.org/',
                'target' => '_blank',
                'created_at' => '2020-03-19 05:14:10',
                'updated_at' => '2024-04-18 22:34:22',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'ALACIBU',
                'user_id' => 1,
                'avatar' => 'aliados/TjWfl5vxX5piHuGppFuWxqtBkPZrmPBp9GmXYCoQ.jpg',
                'is_active' => 1,
                'enlace' => 'http://www.alacibu.org/',
                'target' => '_blank',
                'created_at' => '2020-03-19 05:49:13',
                'updated_at' => '2024-04-18 22:34:10',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'IAOMS',
                'user_id' => 1,
                'avatar' => 'aliados/2WgrvPZFupEP1I4skbEwbYQ0iDhWt041V3dcskYB.jpg',
                'is_active' => 1,
                'enlace' => 'http://www.iaoms.org/',
                'target' => '_blank',
                'created_at' => '2020-03-19 05:49:51',
                'updated_at' => '2024-04-18 22:33:58',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'title' => 'COV',
                'user_id' => 1,
                'avatar' => 'aliados/qt20lsENyeelwnQtF55El3kMGLcv3eKD07bd3jby.jpg',
                'is_active' => 1,
                'enlace' => 'https://cov.org',
                'target' => '_blank',
                'created_at' => '2020-03-19 05:50:46',
                'updated_at' => '2024-04-18 22:33:43',
                'deleted_at' => null,
            ],
        ]);
    }
}
