<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AtorController;

Route::post('/', [AtorController::class, 'store'])->name('store');
Route::match(['put', 'patch'], '/{id}', [AtorController::class, 'update'])->name('update');
Route::delete('/{id}', [AtorController::class, 'destroy'])->name('destroy');
Route::get('/', [AtorController::class, 'index'])->name('index');
Route::get('/{id}', [AtorController::class, 'show'])->name('show');
