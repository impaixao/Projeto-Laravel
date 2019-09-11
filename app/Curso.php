<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'id','titulo', 'descricao', 'valor', 'imagem', 'publicado'
    ];
}
