<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name     = 'Miguel Angel';
        $user->username = 'SuperUser';
        $user->genero   = 'M';
        $user->lastname = 'Reyna Davila';
        $user->email    = 'sysmarddev@gmail.com';
        $user->password = 'sysmard.anyer.93';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Administrador');


         $user = new User;
        $user->name     = 'Usuario';
        $user->username = 'larausuario';
        $user->genero   = 'F';
        $user->lastname = 'Usuarios';
        $user->email    = 'usuario@mail.com';
        $user->password = 'admin';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Usuario');
    }
}
