<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DiretorController;

Route::match(['put', 'patch'], '/{id}', [DiretorController::class, 'update'])->name('update');
Route::delete('/{id}', [AtorController::class, 'destroy'])->name('destroy');
Route::get('/', [DiretorController::class, 'index'])->name('index');
Route::get('/{id}', [DiretorController::class, 'show'])->name('show');
