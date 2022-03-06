<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClassificacaoController;

Route::post('/', [ClassificacaoController::class, 'store'])->name('store');
Route::match(['put', 'patch'], '/{id}', [ClassificacaoController::class, 'update'])->name('update');
Route::delete('/{id}', [ClassificacaoController::class, 'destroy'])->name('destroy');
Route::get('/', [ClassificacaoController::class, 'index'])->name('index');
Route::get('/{id}', [ClassificacaoController::class, 'show'])->name('show');
