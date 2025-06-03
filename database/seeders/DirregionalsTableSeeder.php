<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DirregionalsTableSeeder extends Seeder
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
                'title' => 'Capítulo Aragua',
                'presidente' => 'Dr. Mauro Vivas',
                'secretario' => 'Dr. Antonio Quíntela',
                'tesorero' => 'Dr. Alejandro Sierra',
                'vocal' => 'Dr. Daniel Benain',
                'primerSuplente' => 'No fue asignado',
                'created_at' => Carbon::parse('2022-07-27 19:48:45'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'title' => 'Capítulo Anzoátegui',
                'presidente' => 'Dr. Hermann Pulgar',
                'secretario' => 'Dr. Reinaldo Méndez',
                'tesorero' => 'Dra. Yajaira Fuenmayor',
                'vocal' => 'Dr. Arístides Masa',
                'primerSuplente' => 'Dr. Fidel Guzmán',
                'created_at' => Carbon::parse('2022-07-27 19:50:36'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'title' => 'Capítulo Bolívar',
                'presidente' => 'Dr. Leonard Carrera',
                'secretario' => 'Dra. Magdelyn Castro',
                'tesorero' => 'Dr. Williams Arrieta',
                'vocal' => 'Dr. Carlos Sanabria',
                'primerSuplente' => 'No fue asignado',
                'created_at' => Carbon::parse('2022-07-27 19:54:09'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'title' => 'Capítulo Carabobo',
                'presidente' => 'Dr. Luis Villasmil',
                'secretario' => 'Dr. Bladimir Golaszewski',
                'tesorero' => 'Dr. Juan Torres',
                'vocal' => 'Dra. Gracce Speranza',
                'primerSuplente' => 'Dr. Rafael Barrios',
                'created_at' => Carbon::parse('2022-07-27 19:54:54'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'title' => 'Capítulo Lara',
                'presidente' => 'Dr. Gustavo A. Báez G',
                'secretario' => 'Dr. Georges Aoun',
                'tesorero' => 'Dra. María Fernanda Díaz',
                'vocal' => 'Dra. María Andreina Zamora',
                'primerSuplente' => 'Dr. Fernando Iglesias',
                'created_at' => Carbon::parse('2022-07-27 19:55:45'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'user_id' => 1,
                'title' => 'Capítulo Mérida',
                'presidente' => 'Dra. Norma Angélica Martínez',
                'secretario' => 'Dr. Ricardo Felzani Moreno',
                'tesorero' => 'Dr. Manuel Molina Barreto',
                'vocal' => 'Dr. Juan Malavé Vera',
                'primerSuplente' => 'No fue asignado',
                'created_at' => Carbon::parse('2022-07-27 19:56:31'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                'user_id' => 1,
                'title' => 'Capítulo Táchira',
                'presidente' => 'Dra. María Alejandra Quintero',
                'secretario' => 'Dr. Héctor Alonso Ramírez',
                'tesorero' => 'Dr. Lionar Alberto Colmenares Prato',
                'vocal' => 'Dr. Francisco José Franceschini Roa',
                'primerSuplente' => 'No fue asignado',
                'created_at' => Carbon::parse('2022-07-27 19:57:18'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 8,
                'user_id' => 1,
                'title' => 'Capítulo Zulia',
                'presidente' => 'Dr. Gustavo Bustamante',
                'secretario' => 'Dr. Juan Consuegra',
                'tesorero' => 'Dr. Alejandro Cedeño',
                'vocal' => 'Dra. Matilce Sánchez',
                'primerSuplente' => 'Dra. Sandra Parra',
                'created_at' => Carbon::parse('2022-07-27 19:58:05'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 9,
                'user_id' => 1,
                'title' => 'Tribunal Disciplinario',
                'presidente' => 'Dr. Hans Cordsen',
                'secretario' => 'Dra. María Andreina Zamora',
                'tesorero' => ' Dr. Wladimir Golawseski',
                'vocal' => 'Dr. Lionar Colmenares',
                'primerSuplente' => 'Dr. Leonard Carrera',
                'created_at' => Carbon::parse('2022-07-27 19:58:37'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ];

        DB::table('dirregionals')->insert($data);
    }
}
