<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SlidersTableSeeder extends Seeder
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
                'title' => 'Bienvenido a la Web App SVCBMF',
                'user_id' => 1,
                'description' => '<p>null</p>',
                'avatar' => 'sliders/MQIn3xgfUHrKbNP5IIakcUnhuYPQReCNPQOLvNCm.jpg',
                'imagemovil' => 'sliders/WDhsBmRVtk3GT1SY8U1oDZAiTmRxrJ52gSGiddfN.jpg',
                'is_active' => 1,
                'is_activeText' => false,
                'is_activeBot' => true,
                'boton' => 'Conocer más',
                'enlace' => 'nosotros',
                'target' => '_self',
                'created_at' => null,
                'updated_at' => Carbon::parse('2025-05-24 00:46:35'),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Educación Continúa 2021',
                'user_id' => 1,
                'description' => '<p>Educaci&oacute;n Contin&uacute;a 2021</p>',
                'avatar' => 'sliders/GJPQvQZrE5KfiAriCWFUs9QumYhFtnjOnbvP7QGe.jpg',
                'imagemovil' => 'sliders/sjsSxVScxNpecM0G53sFlim3QUOQyMhomSZgez4I.jpg',
                'is_active' => 0,
                'is_activeText' => false,
                'is_activeBot' => true,
                'boton' => 'Regístrate aquí',
                'enlace' => 'https://attendee.gotowebinar.com/rt/5090401700977564685',
                'target' => '_blank',
                'created_at' => null,
                'updated_at' => Carbon::parse('2024-04-21 01:20:16'),
                'deleted_at' => null,
            ],
        ];

        DB::table('sliders')->insert($data);
    }
}
