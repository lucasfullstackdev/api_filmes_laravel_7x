<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->namespace('Api')->group(function () {
    Route::prefix('/generos')->name('genero.')->group(realpath(__DIR__ . '/api/v1/generos.php'));
    Route::prefix('/atores')->name('ator.')->group(realpath(__DIR__ . '/api/v1/atores.php'));
    Route::prefix('/diretores')->name('diretor.')->group(realpath(__DIR__ . '/api/v1/diretores.php'));
    Route::prefix('/classificacoes')->name('classificacao.')->group(realpath(__DIR__ . '/api/v1/classificacoes.php'));
    Route::prefix('/filmes')->name('filme.')->group(realpath(__DIR__ . '/api/v1/filmes.php'));
});
