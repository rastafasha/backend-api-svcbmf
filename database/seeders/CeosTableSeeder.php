<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CeosTableSeeder extends Seeder
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
                'name' => 'Dr. José Luis Castro',
                'user_id' => 1,
                'cargo_id' => 1,
                'cargoceo_name' => 'Presidente',
                'avatar' => 'directiva/0bR1v1egxspYAeoMbYBI0Xzw0a4OXeglaOiM2pte.jpg',
                'created_at' => Carbon::parse('2021-09-24 00:58:15'),
                'updated_at' => Carbon::parse('2025-05-23 16:08:07'),
            ],
            [
                'id' => 2,
                'name' => 'Dr. Henry García',
                'user_id' => 1,
                'cargo_id' => 2,
                'cargoceo_name' => 'Vice-Presidente',
                'avatar' => 'directiva/B0LTlqw2kbINUcf76XBBWJXNLSQfOKjdSmOyZhy2.jpg',
                'created_at' => Carbon::parse('2021-09-24 01:08:21'),
                'updated_at' => Carbon::parse('2025-05-23 16:07:55'),
            ],
            [
                'id' => 3,
                'name' => 'Dr. Ronar Gudiño',
                'user_id' => 1,
                'cargo_id' => 3,
                'cargoceo_name' => 'Secretario',
                'avatar' => 'directiva/4mN9FkAqTyP5HZeK1oebKezKbwjpfZy9Iw3YzOj2.jpg',
                'cargoceo_name' => 'Secretario',
                'avatar' => 'directiva/4mN9FkAqTyP5HZeK1oebKezKbwjpfZy9Iw3YzOj2.jpg',
                'created_at' => Carbon::parse('2021-09-24 01:28:20'),
                'updated_at' => Carbon::parse('2025-05-23 16:07:43'),
                
            ],
            [
                'id' => 4,
                'name' => 'Dr. Nicolás Solano',
                'user_id' => 1,
                'cargo_id' => 4,
                'cargoceo_name' => 'Tesorero',
                'avatar' => 'directiva/UzjTzxTfJj9cEeagVka6rVuUOcKR9G7VAvrJwLVj.jpg',
                'created_at' => Carbon::parse('2021-09-24 01:40:08'),
                'updated_at' => Carbon::parse('2025-05-23 16:08:19'),
                
            ],
            [
                'id' => 5,
                'name' => 'Dr. Paolo Verona',
                'user_id' => 1,
                'cargo_id' => 5,
                'cargoceo_name' => 'Vocal',
                'avatar' => 'directiva/zAwXxzb9UVhv9xBD3I3FpFgcXngYCHwm8R5XKoEu.jpg',
                'created_at' => Carbon::parse('2021-09-24 01:41:14'),
                'updated_at' => Carbon::parse('2025-05-23 16:08:30'),
                
            ],
            [
                'id' => 6,
                'name' => 'Dr. Daniel Benaim',
                'user_id' => 1,
                'cargo_id' => 6,
                'cargoceo_name' => '1er.Suplente',
                'avatar' => 'directiva/2y1k3Gz3Bz9vV0amm3XFZ4MHbgQgV9gpQJQiIa1S.jpg',
                'created_at' => Carbon::parse('2021-09-24 01:41:46'),
                'updated_at' => Carbon::parse('2025-05-23 16:08:42'),
                
            ],
            [
                'id' => 7,
                'name' => 'Dr. Gustavo Bustamante',
                'user_id' => 1,
                'cargo_id' => 7,
                'cargoceo_name' => '2do.Suplente',
                'avatar' => 'directiva/gVyIzjo8dZUduNjyFEImgiwhxCgTOhJkJUr0J6m7.jpg',
                'created_at' => Carbon::parse('2021-09-24 01:42:20'),
                'updated_at' => Carbon::parse('2025-05-23 16:08:55'),
                
            ],
        ];

        DB::table('ceos')->insert($data);
    }
}
