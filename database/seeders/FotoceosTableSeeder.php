<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class FotoceosTableSeeder extends Seeder
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
                'avatar' => 'fotoceos/TsZnutwOXNH4atK6DgNFlCxJbskqjLbSPvPUonDZ.jpg',
                'titulo' => 'Junta Directiva de la Sociedad Venezolana de Cirugía Bucomaxilofacial',
                'periodo' => 'Periodo 2022 - 2024',
                'created_at' => Carbon::parse('2021-09-24 18:52:40'),
                'updated_at' => Carbon::parse('2024-04-20 19:35:18'),
                'deleted_at' => null,
            ],
        ];

        DB::table('fotoceos')->insert($data);
    }
}
