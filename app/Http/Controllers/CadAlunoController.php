<?php

namespace App\Http\Controllers;

use App\Models\CadAluno;
use Illuminate\Http\Request;

class CadAlunoController extends Controller
{
    public function index()
    {
        $users = CadAluno::all();
        return view('cad_alunos.index', compact('users'));
    }

    public function create()
    {
        return view('cad_alunos.create');
    }

    public function store(Request $request)
    {
        // Valida os dados recebidos do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'instituicao' => 'required|string|max:255',
            'periodo' => 'required|string|max:255',
            'foto' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'destino' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:cad_alunos',
        ]);

        CadAluno::create($validatedData);

        return redirect()->route('cad_alunos.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}

