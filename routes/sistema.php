<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;

Route::group([], function () {
    Route::get('/cad-alunos', [SistemaController::class, 'CadAlunos'])->name('CadAlunos');
    Route::get('/show_alunos', [SistemaController::class, 'index'])->name('index');
    Route::post('/cad_alunos', [SistemaController::class, 'store'])->name('store_aluno'); // Adicionei um nome para a rota de armazenamento do aluno
});

?>
