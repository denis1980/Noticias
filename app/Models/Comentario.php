<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model

{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function noticia()

    {
        return $this->belongsTo(noticia::class);
    }
}
