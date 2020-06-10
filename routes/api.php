<?php

use Illuminate\Http\Request;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('Api')->group( function() {
    // Endpoints para Gênero
    Route::prefix('v1/generos')->name('genero.')->group( function() {
        Route::post('/', 'GeneroController@store')->name('store');
        Route::match(['put', 'patch'], '/{id}', 'GeneroController@update')->name('update');
        Route::delete('/{id}', 'GeneroController@destroy')->name('destroy');
        
        Route::get('/', 'GeneroController@index')->name('index');
        Route::get('/{id}', 'GeneroController@show')->name('show');
    });

    // Endpoints para ator
    Route::prefix('v1/atores')->name('ator.')->group( function(){
        Route::post('/', 'AtorController@store')->name('store');
        Route::match(['put', 'patch'], '/{id}', 'AtorController@update')->name('update');
        Route::delete('/{id}', 'AtorController@destroy')->name('destroy');
        
        Route::get('/', 'AtorController@index')->name('index');
        Route::get('/{id}', 'AtorController@show')->name('show');
    });

    //Endpoints para diretor
    Route::prefix('v1/diretores')->name('diretor.')->group( function(){
        Route::post('/', 'DiretorController@store')->name('store');
        Route::match(['put', 'patch'], '/{id}', 'DiretorController@update')->name('update');
        Route::delete('/{id}', 'AtorController@destroy')->name('destroy');
        
        Route::get('/', 'DiretorController@index')->name('index');
        Route::get('/{id}', 'DiretorController@show')->name('show');
    });

    //Endpoints para classificação
    Route::prefix('v1/classificacoes')->name('classificacao.')->group( function(){
        Route::post('/', 'ClassificacaoController@store')->name('store');
        Route::match(['put', 'patch'], '/{id}', 'ClassificacaoController@update')->name('update');
        Route::delete('/{id}', 'ClassificacaoController@destroy')->name('destroy');
        
        Route::get('/', 'ClassificacaoController@index')->name('index');
        Route::get('/{id}', 'ClassificacaoController@show')->name('show');
    });

    //Endpoints para filmes
    Route::prefix('v1/filmes')->name('filme.')->group( function(){
        Route::post('/', 'FilmeController@store')->name('store');
        Route::match(['put', 'patch'], '/{id}', 'FilmeController@update')->name('update');
        Route::delete('/{id}', 'FilmeController@destroy')->name('destroy');
        
        Route::get('/', 'FilmeController@index')->name('index');
        Route::get('/{id}', 'FilmeController@show')->name('show');

        //Endpoints para filmes -> atores
        Route::get('/{id}/atores', 'FilmeAtorController@index')->name('index');
        Route::get('/{id}/atores/{idAtor}', 'FilmeAtorController@show')->name('show');
        Route::post('/{id}/atores', 'FilmeAtorController@store')->name('store');
        Route::delete('/{id}/atores/{idAtor}', 'FilmeAtorController@destroy')->name('destroy');

        //Endpoints para filmes -> diretores
        Route::get('/{id}/diretores', 'FilmeDiretorController@index')->name('index');
        Route::get('/{id}/diretores/{idDiretor}', 'FilmeDiretorController@show')->name('show');
        Route::post('/{id}/diretores', 'FilmeDiretorController@store')->name('store');
        Route::delete('/{id}/diretores/{idAtor}', 'FilmeDiretorController@destroy')->name('destroy');
    });
});
