<?php

namespace App\Http\Controllers;

use App\Models\CadUser;
use Illuminate\Http\Request;

class CadUserController extends Controller
{
    public function index()
    {
        // Retorna todos os registros da tabela "cad_users"
        $users = CadUser::all();
        return view('cad_users.index', compact('users'));
    }

    public function create()
    {
        // Retorna a view para criar um novo registro
        return view('cad_users.create');
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
            'email' => 'required|string|max:255|email|unique:cad_users',
        ]);

        // Cria um novo registro no banco de dados com os dados validados
        CadUser::create($validatedData);

        // Redireciona para a lista de usuários cadastrados
        return redirect()->route('cad_users.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}

