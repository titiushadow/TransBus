<?php

// app/Http/Controllers/CadUserController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadUser;

class CadUserController extends Controller
{
    public function index()
    {
        $cadUsers = CadUser::all();
        return view('caduser.index', compact('cadUsers'));
    }

    public function create()
    {
        return view('caduser.create');
    }

    public function store(Request $request)
    {
        $cadUser = new CadUser();
        $cadUser->nome = $request->input('nome');
        $cadUser->instituicao = $request->input('instituicao');
        $cadUser->periodo = $request->input('periodo');
        $cadUser->foto = $request->input('foto');
        $cadUser->curso = $request->input('curso');
        $cadUser->cpf = $request->input('cpf');
        $cadUser->destino = $request->input('destino');
        $cadUser->email = $request->input('email');
        $cadUser->save();

        return redirect('/caduser')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function show($id)
    {
        $cadUser = CadUser::find($id);
        return view('caduser.show', compact('cadUser'));
    }

    public function edit($id)
    {
        $cadUser = CadUser::find($id);
        return view('caduser.edit', compact('cadUser'));
    }

    public function update(Request $request, $id)
    {
        $cadUser = CadUser::find($id);
        $cadUser->nome = $request->input('nome');
        $cadUser->instituicao = $request->input('instituicao');
        $cadUser->periodo = $request->input('periodo');
        $cadUser->foto = $request->input('foto');
        $cadUser->curso = $request->input('curso');
        $cadUser->cpf = $request->input('cpf');
        $cadUser->destino = $request->input('destino');
        $cadUser->email = $request->input('email');
        $cadUser->save();

        return redirect('/caduser')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $cadUser = CadUser::find($id);
        $cadUser->delete();

        return redirect('/caduser')->with('success', 'Usuário removido com sucesso!');
    }
}

