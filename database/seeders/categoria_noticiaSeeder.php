<?php

namespace Database\Seeders;

use App\Models\Categoria_noticia;
use Illuminate\Database\Seeder;

class categoria_noticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria_noticia::create([
            "noticia_id" => 1,
            "categoria_id" => 1
    
        ]);

        Categoria_noticia::create([
            "noticia_id" => 1,
            "categoria_id" => 1
    
        ]);
    }
}
