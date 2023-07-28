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

    public function index()
    {
        $alunos = CadAluno::all(); // Renomeei a variável de $users para $alunos
        return inertia('Show/ShowAlunos', ['alunos' => $alunos]); // Passo os alunos para a view 'ShowAlunos'
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

        return redirect()->route('index')->with('success', 'Aluno cadastrado com sucesso!'); // Redireciono para a rota 'index'
    }
}
