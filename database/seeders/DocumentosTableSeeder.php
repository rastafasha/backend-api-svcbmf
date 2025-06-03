<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DocumentosTableSeeder extends Seeder
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
                'archivo' => 'documentos/D8y6elc3DIdLct7vkd1s1W2VxLwmOhm0D1sKPYS0.pdf',
                'titulo' => 'Ley ejercicio de la odontología',
                'created_at' => Carbon::parse('2019-12-21 06:03:26'),
                'updated_at' => Carbon::parse('2024-04-20 18:27:21'),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'archivo' => 'documentos/TCO7TH4d4jShrltYvZMyZ3ey7OVvuX9d7VGx8QaN.pdf',
                'titulo' => 'Estatutos SVCBMF',
                'created_at' => Carbon::parse('2019-12-21 06:03:26'),
                'updated_at' => Carbon::parse('2024-04-20 18:28:15'),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'archivo' => 'documentos/ejGVxws5su5VD3YuVJRetgoOEz0uaLuela19PGAK.pdf',
                'titulo' => 'Artículos de prensa - Juicio',
                'created_at' => Carbon::parse('2019-12-21 06:03:26'),
                'updated_at' => Carbon::parse('2024-04-20 18:28:28'),
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'archivo' => '952213.pdf',
                'titulo' => 'Sentencia definitiva y resultado de apelación',
                'created_at' => Carbon::parse('2019-12-21 06:03:26'),
                'updated_at' => Carbon::parse('2024-04-20 18:28:47'),
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                 'user_id' => 1,
                'archivo' => '803799.pdf',
                'titulo' => 'Cartas appoyo a la especialidad y a la SVCBMF',
                'created_at' => Carbon::parse('2019-12-21 06:03:26'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                 'user_id' => 1,
                'archivo' => '808901.pdf',
                'titulo' => 'Prensa, medida cautelar y juicio 1',
                'created_at' => Carbon::parse('2019-12-21 06:03:26'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ];

        DB::table('documentos')->insert($data);
    }
}
