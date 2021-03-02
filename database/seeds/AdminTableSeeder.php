<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       DB::table('status')->insert([
            'nb_nombre'      => 'Activo'
        ]);

          DB::table('status')->insert([
            'nb_nombre'      =>'Inactivo'
        ]);

        $user = new User;
        $user->name = 'Theizer';
        $user->username = 'tgonzalez';
        $user->last_name = 'Gonzalez';
        $user->email = 'tgonzalez@gmail.com';
        $user->password = 'admin';
        $user->status_id = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Administrador');


   }
}
