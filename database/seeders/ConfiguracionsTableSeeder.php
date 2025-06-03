<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ConfiguracionsTableSeeder extends Seeder
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
                'direccion' => '<p>Av.Libertador,  Torre Macom, Piso 2, Ofc. 2 A, Chacao, Caracas, Venezuela</p>',
                'telefono' => '123',
                'telefonoActivo' => false,
                'telPresidencia' => '+58(414)-315.14.22',
                'telPresActivo' => true,
                'telSecretaria' => '+58(412)-607.63.69',
                'telSecActivo' => true,
                'telTesoreria' => '+58(412)-971.46.76',
                'telTesActivo' => true,
                'created_at' => Carbon::parse('2022-02-09 15:48:49'),
            ],
        ];

        DB::table('configuracions')->insert($data);
    }
}
