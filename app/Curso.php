<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nome', 'duracao', 'descricao',
    ];

    protected $validate = [
        'nome' => 'required',
        'duracao' => 'required'
    ];
}
