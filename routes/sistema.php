<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;

Route::group([], function () {
    Route::controller(SistemaController::class)->group(function () {
        Route::get('/cad-alunos', [SistemaController::class, 'CadAlunos'])->name('CadAlunos');
        Route::post('/caduser', [SistemaController::class, 'store']);
    });
});



?>
