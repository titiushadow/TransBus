<?php

namespace App\Http\Controllers;

use App\Models\CadAluno;
use Illuminate\Http\Request;

class CadAlunoController extends Controller
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
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'instituicao' => 'required|string|max:255',
            'periodo' => 'required|string|max:255',
            'foto' => 'string|max:255',
            'curso' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'destino' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

        CadAluno::create($validatedData);

        return redirect()->route('cad_alunos.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}

