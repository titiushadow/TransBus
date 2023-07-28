<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadUser extends Model
{
        // Defina a tabela correspondente, se for diferente do padrão 'cad_users'
        protected $table = 'cad_users';

        // Defina os campos que podem ser preenchidos em massa
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

        use HasFactory;
}
