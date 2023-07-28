<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CadUser extends Model
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

