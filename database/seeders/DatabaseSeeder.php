<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(RoleAndPermissionSeeder::class);
        $this->call(AliadosTableSeeder::class);
        $this->call(BancuadradosTableSeeder::class);
        $this->call(BanhorizontalsTableSeeder::class);
        $this->call(BanverticalsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CargosTableSeeder::class);

    }
}
