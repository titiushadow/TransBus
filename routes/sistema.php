<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;

Route::group([], function () {
    Route::controller(SistemaController::class)->group(function () {
        Route::get('/cad-alunos', [SistemaController::class, 'CadAlunos'])->name('CadAlunos');
        Route::get('/caduser', 'CadUserController@index');
        Route::get('/caduser/create', 'CadUserController@create');
        Route::post('/caduser', 'CadUserController@store');
        Route::get('/caduser/{id}', 'CadUserController@show');
        Route::get('/caduser/{id}/edit', 'CadUserController@edit');
        Route::put('/caduser/{id}', 'CadUserController@update');
        Route::delete('/caduser/{id}', 'CadUserController@destroy');
    });
});


?>
