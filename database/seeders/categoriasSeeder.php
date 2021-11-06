<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            "nome" => "politica"
            
        ]);

        Categoria::create([
            "nome" => "economia"
            
        ]);

        Categoria::create([
            "nome" => "esporte"
            
        ]);

        Categoria::create([
            "nome" => "eleições"
            
        ]);
    }

}
