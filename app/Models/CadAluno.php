<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CadAluno extends Model
{
    protected $fillable = [
        'nome',
        'instituicao',
        'periodo',
        'foto',
        'curso',
        'cpf',
        'destino',
        'email',
    ];
}

