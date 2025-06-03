<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class FormacionsTableSeeder extends Seeder
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
                'title' => 'Hospital General del Oeste. Dr. Jose Gregorio Hernandez. Los Magallanes de Catia.Caracas',
                'slug' => 'hospital-general-del-oeste-dr-jose-gregorio-hernandez-los-magallanes-de-catiacaracas',
                'is_featured' => 1,
                
                'is_active' => 1,
                'tipoPrograma' => 'Residencia Asistencial Programada  en Cirugia y Traumatologia Buco Maxilofacial',
                'aval' => 'Ministerio del Poder Popular para la Salud.',
                'tiempoFormacion' => '4 años',
                'frecuencia' => 'Dedicación exclusiva',
                'director' => 'Dr. Hans Cordsen',
                'created_at' => Carbon::parse('2020-01-29 16:05:59'),
                'updated_at' => Carbon::parse('2024-05-29 14:46:42'),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                 'user_id' => 1,
                'title' => 'Hospital General del Este. Dr. Domingo Luciani. El Llanito. Caracas',
                'slug' => 'hospital-general-del-este-dr-domingo-luciani-el-llanito-caracas',
                'is_featured' => 1,
                'is_active' => 1,
                'tipoPrograma' => 'Residencia Asistencial Programada en Cirugia Buco Maxilofacial',
                'aval' => 'Instituto Venezolano de los Seguros Sociales',
                'tiempoFormacion' => '4 Años',
                'frecuencia' => 'Dedicación exclusiva que incluye guadias de atención 24 Horas',
                'director' => 'Dr. Henrique Velez',
                'created_at' => Carbon::parse('2020-01-29 16:16:20'),
                'updated_at' => Carbon::parse('2024-04-20 23:43:30'),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                 'user_id' => 1,
                'title' => 'Hospital Militar Dr. Carlos Arvelo',
                'slug' => 'hospital-militar-dr-carlos-arvelo',
                'is_featured' => 1,
                'is_active' => 1,
                'tipoPrograma' => 'Residencia Asistencial Programada  en  Cirugia Buco Maxilofacial',
                'aval' => 'Ministerio del Poder Popular para la Salud.',
                'tiempoFormacion' => '4 años y 6 meses.',
                'frecuencia' => 'Dedicación exclusiva que incluye guadias de atención 24 Horas',
                'director' => 'Dr. Jose Gregorio Melillo.',
                'created_at' => Carbon::parse('2020-01-29 16:17:48'),
                'updated_at' => Carbon::parse('2024-04-20 23:43:25'),
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                 'user_id' => 1,
                'title' => 'Hospital Angel Larralde Universidad de Carabobo. Edo Carabobo. Valencia',
                'slug' => 'hospital-angel-larralde-universidad-de-carabobo-edo-carabobo-valencia',
                'is_featured' => 1,
                'is_active' => 1,
                'tipoPrograma' => 'Universitario',
                'aval' => 'Universidad de Carabobo - Facultad de Odontología.',
                'tiempoFormacion' => '4 años',
                'frecuencia' => 'Dedicación exclusiva que incluye guadias de atención 24 Horas',
                'director' => 'Dr. Ruben Muñoz',
                'created_at' => Carbon::parse('2020-01-29 16:19:00'),
                'updated_at' => Carbon::parse('2024-04-20 23:44:05'),
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                 'user_id' => 1,
                'title' => 'Ciudad Hospitalaria Dr. Henrique Tejera (CHET). Valencia. Edo Carabobo.',
                'slug' => 'ciudad-hospitalaria-dr-henrique-tejera-chet-valencia-edo-carabobo',
                'is_featured' => 1,
                'is_active' => 1,
                'tipoPrograma' => 'Residencia Asistencial Programada  en  Cirugia Buco Maxilofacial',
                'aval' => 'Instituto Carabobeño para la Salud (INSALUD)',
                'tiempoFormacion' => '4 años',
                'frecuencia' => 'Dedicación exclusiva que incluye guadias de atención 24 Horas',
                'director' => 'Dra. Andreina Gonzalez',
                'created_at' => Carbon::parse('2020-01-29 16:19:55'),
                'updated_at' => Carbon::parse('2024-04-20 23:42:48'),
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                 'user_id' => 1,
                'title' => 'Hospital Dr. Adolfo Prince Lara. Puerto Cabello',
                'slug' => 'hospital-dr-adolfo-prince-lara-puerto-cabello',
                'is_featured' => 1,
                'is_active' => 1,
                'tipoPrograma' => 'Residencia Asistencial Programada  en  Cirugia Buco Maxilofacial',
                'aval' => 'Ministerio del Poder Popular para la Salud (MPPS) - Instituto Carabobeño para la Salud (INSALUD)',
                'tiempoFormacion' => '4 años',
                'frecuencia' => 'Dedicación exclusiva que incluye guardias de atención 24 Horas',
                'director' => 'Dra. Beryorys Niño.',
                'created_at' => Carbon::parse('2020-01-29 16:20:53'),
                'updated_at' => Carbon::parse('2024-04-20 23:43:36'),
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                 'user_id' => 1,
                'title' => 'Especialista en Cirugia buco maxilofacial',
                'slug' => 'especialista-en-cirugia-buco-maxilofacial',
                'is_featured' => 1,
                'is_active' => 1,
                'tipoPrograma' => 'Universitario',
                'aval' => 'Universidad de Carabobo - Facultad de Odontología.',
                'tiempoFormacion' => '4 años',
                'frecuencia' => 'Dedicación exclusiva que incluye guadias de atención 24 Horas',
                'director' => 'Dr. Ruben Muñoz',
                'created_at' => Carbon::parse('2020-01-29 16:21:51'),
                'updated_at' => Carbon::parse('2024-04-20 23:44:11'),
                'deleted_at' => null,
            ],
            [
                'id' => 8,
                 'user_id' => 1,
                'title' => 'Especialista en Cirugia Bucal',
                'slug' => 'especialista-en-cirugia-bucal',
                'is_featured' => 1,
                'is_active' => 1,
                'tipoPrograma' => 'Universitario',
                'aval' => 'Universidad Central de Venezuela',
                'tiempoFormacion' => '2 Años',
                'frecuencia' => 'Dedicación exclusiva',
                'director' => 'Dr. Jose Luis Castro',
                'created_at' => Carbon::parse('2020-01-29 16:22:52'),
                'updated_at' => Carbon::parse('2024-04-20 23:43:21'),
                'deleted_at' => null,
            ],
            [
                'id' => 9,
                 'user_id' => 1,
                'title' => 'Especialista en Cirugia Bucal',
                'slug' => 'especialista-en-cirugia-bucal',
                'is_featured' => 1,
                'is_active' => 1,
                'tipoPrograma' => 'Universitario',
                'aval' => 'La Universidad  del Zulia (LUZ). Edo Zulia. Maracaibo',
                'tiempoFormacion' => '2 1/2 Años ( 5 semestres)',
                'frecuencia' => 'Dedicación exclusiva con Guardias 24 horas',
                'director' => 'Dr. Luis Sarmiento',
                'created_at' => Carbon::parse('2020-01-29 16:23:54'),
                'updated_at' => Carbon::parse('2024-04-20 23:43:14'),
                'deleted_at' => null,
            ],
        ];

        DB::table('formacions')->insert($data);
    }
}
