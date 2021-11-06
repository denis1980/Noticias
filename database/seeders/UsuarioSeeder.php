<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            "name" => "Usuario",
            "email" => "usuario@usuario.com",
            "password" => bcrypt("123abc"),
        ]);
    }
}
