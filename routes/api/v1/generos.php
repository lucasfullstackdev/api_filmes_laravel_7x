<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GeneroController;

Route::get('/', [GeneroController::class, 'index'])->name('index');
Route::post('/', [GeneroControllerr::class, 'store'])->name('store');
Route::match(['put', 'patch'], '/{id}', [GeneroController::class, 'update'])->name('update');
Route::delete('/{id}', [GeneroController::class, 'destroy'])->name('destroy');
Route::get('/{id}', [GeneroController::class, 'show'])->name('show');
