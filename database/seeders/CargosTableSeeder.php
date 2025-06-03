<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            ['id' => 1, 'cargo_name' => 'Presidente', 'user_id' => 1],
            ['id' => 2, 'cargo_name' => 'Vice-Presidente', 'user_id' => 1],
            ['id' => 3, 'cargo_name' => 'Secretario', 'user_id' => 1],
            ['id' => 4, 'cargo_name' => 'Tesorero', 'user_id' => 1],
            ['id' => 5, 'cargo_name' => 'Vocal', 'user_id' => 1],
            ['id' => 6, 'cargo_name' => '1er. Suplente', 'user_id' => 1],
            ['id' => 7, 'cargo_name' => '2do.Suplente', 'user_id' => 1],
        ]);
    }
}
