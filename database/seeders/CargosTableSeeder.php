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
            ['id' => 1, 'cargo_name' => 'Presidente'],
            ['id' => 2, 'cargo_name' => 'Vice-Presidente'],
            ['id' => 3, 'cargo_name' => 'Secretario'],
            ['id' => 4, 'cargo_name' => 'Tesorero'],
            ['id' => 5, 'cargo_name' => 'Vocal'],
            ['id' => 6, 'cargo_name' => '1er. Suplente'],
            ['id' => 7, 'cargo_name' => '2do.Suplente'],
        ]);
    }
}
