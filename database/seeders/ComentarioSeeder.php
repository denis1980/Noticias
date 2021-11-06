<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::create([
            
            'conteudo' => 'Sei lá, tipo, gostei!'
            'noticia_id' => 13
        ]);
    }
}
