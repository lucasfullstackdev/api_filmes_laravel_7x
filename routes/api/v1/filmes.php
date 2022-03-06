<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FilmeController;
use App\Http\Controllers\Api\FilmeAtorController;
use App\Http\Controllers\Api\FilmeDiretorController;

Route::post('/', [FilmeController::class, 'store'])->name('store');
Route::match(['put', 'patch'], '/{id}', [FilmeController::class, 'update'])->name('update');
Route::delete('/{id}', [FilmeController::class, 'destroy'])->name('destroy');

Route::get('/', [FilmeController::class, 'index'])->name('index');
Route::get('/{id}', [FilmeController::class, 'show'])->name('show');

//Endpoints para filmes -> atores
Route::prefix('/{id}/atores')->group(function () {
    Route::get('/', [FilmeAtorController::class, 'index'])->name('index');
    Route::get('/{idAtor}', [FilmeAtorController::class, 'show'])->name('show');
    Route::post('/', [FilmeAtorController::class, 'store'])->name('store');
    Route::delete('/{idAtor}', [FilmeAtorController::class, 'destroy'])->name('destroy');
});

//Endpoints para filmes -> diretores
Route::prefix('/{id}/diretores')->group(function () {
    Route::get('/', [FilmeDiretorController::class, 'index'])->name('index');
    Route::get('/{idDiretor}', [FilmeDiretorController::class, 'show'])->name('show');
    Route::post('/', [FilmeDiretorController::class, 'store'])->name('store');
    Route::delete('/{idAtor}', [FilmeDiretorController::class, 'destroy'])->name('destroy');
});
