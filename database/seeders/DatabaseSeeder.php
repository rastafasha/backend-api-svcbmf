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
        $this->call(RoleAndPermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AliadosTableSeeder::class);
        $this->call(BancuadradosTableSeeder::class);
        $this->call(BanhorizontalsTableSeeder::class);
        $this->call(BanverticalsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(ActualizacionsTableSeeder::class);
        $this->call(AfiliacionesTableSeeder::class);
        $this->call(ConfiguracionsTableSeeder::class);
        $this->call(DirectoriesTableSeeder::class);
        $this->call(DirregionalsTableSeeder::class);
        $this->call(DocumentosTableSeeder::class);
        $this->call(FormacionsTableSeeder::class);
        $this->call(FotoceosTableSeeder::class);
        $this->call(CeosTableSeeder::class);
        $this->call(GaleriasTableSeeder::class);
        $this->call(PacientesTableSeeder::class);
        $this->call(RevistasTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(TimelinesTableSeeder::class);

    }
}
