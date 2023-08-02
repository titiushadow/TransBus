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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'instituicao' => 'required|string|max:255',
            'periodo' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'destino' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:cad_alunos',
        ]);

        CadAluno::create($validatedData);

        return redirect()->route('ShowAlunos')->with('success', 'Aluno cadastrado com sucesso!');
    }
}
