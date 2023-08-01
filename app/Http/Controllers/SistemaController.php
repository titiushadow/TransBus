<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadAluno;

class SistemaController extends Controller
{
    public function CadAlunos()
    {
        return inertia('Cadastros/CadAlunos');
    }

    public function ShowAlunos()
    {
        $alunos = CadAluno::all();
        return inertia('Show/ShowAlunos', ['alunos' => $alunos]);
    }
}
