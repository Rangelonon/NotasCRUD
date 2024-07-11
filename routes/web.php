<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotaController;

Route::get('/', [HomeController::class, 'index'])->name('home-index');

Route::get('/nota', [NotaController::class, 'index'])->name('notas.nota');
Route::get('/nota/create', [NotaController::class, 'create'])->name('notas.create');
Route::post('/nota/store', [NotaController::class, 'store'])->name('notas.store');
Route::delete('/nota/{nota}/delete', [NotaController::class, 'destroy'])->name('notas.destroy');

Route::get('/nota/{nota}', [NotaController::class, 'show'])->name('notas.show');

Route::put('/nota/{nota}', [NotaController::class, 'update'])->name('notas.update');
Route::get('nota/{nota}/edit',[NotaController::class, 'edit'])->name('notas.edit');