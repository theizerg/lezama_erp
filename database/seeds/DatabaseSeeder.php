<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RolesAndPermisosTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(CabeceraTableSeeder::class);

    }
}
