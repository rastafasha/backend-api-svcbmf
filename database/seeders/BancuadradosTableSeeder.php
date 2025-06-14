<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BancuadradosTableSeeder extends Seeder
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
                'user_id' => 1,
                'avatar' => 'bancuadrados/IPE54MHp1LgUH7BFUhqyEpBL5t6GrucwNHhpYnnB.jpg',
                'titulo' => 'contacto SVCBMF',
                'target' => '_self',
                'enlace' => 'contacto',
                'is_active' => 1,
                'created_at' => Carbon::parse('2019-12-18 06:06:08'),
                'updated_at' => Carbon::parse('2024-04-18 22:28:09'),
                'deleted_at' => null,
            ],
        ];

        DB::table('bancuadrados')->insert($data);
    }
}
