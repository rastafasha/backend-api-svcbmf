<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $data = [
            [
                'id' => 1,
                'name' => 'Relacionado al titulo',
                'created_at' => Carbon::parse('2023-01-01 00:00:00'),
                'updated_at' => Carbon::parse('2023-01-01 00:00:00'),
            ],
            [
                'id' => 2,
                'name' => 'Tips y Publicidad',
                'created_at' => Carbon::parse('2023-05-14 21:06:54'),
                'updated_at' => Carbon::parse('2023-05-18 16:57:58'),
            ],
            [
                'id' => 3,
                'name' => 'Proyecto de Clase',
                'created_at' => Carbon::parse('2023-05-14 21:13:20'),
                'updated_at' => Carbon::parse('2023-05-14 21:13:20'),
            ],
            [
                'id' => 4,
                'name' => 'prueba',
                'created_at' => Carbon::parse('2023-08-06 19:25:40'),
                'updated_at' => Carbon::parse('2023-08-06 19:25:40'),
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
