<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\CadAlunoController;


Route::group([], function () {
    Route::get('/cad-alunos', [SistemaController::class, 'CadAlunos'])->name('CadAlunos');
    Route::get('/show_alunos', [SistemaController::class, 'ShowAlunos'])->name('ShowAlunos');
    Route::post('/cad_alunos', [SistemaController::class, 'store'])->name('store_aluno');
});
?>
