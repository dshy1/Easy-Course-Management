<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [
        'curso_id', 'professor_id',
    ];

    protected $validate = [
        'curso_id' => 'required',
        'professor_id' => 'required'
    ];
}
