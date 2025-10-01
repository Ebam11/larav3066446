<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\AdivinaNumeroController;
use App\Http\Controllers\FactorialController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\TablaController;
use App\Http\Controllers\NumerosController;
use App\Http\Controllers\CategoryController;

Route::get('frmcuadratica',[OperacionesController::class, 'frmcuadratica']);
Route::post('cuadratica', [OperacionesController::class, 'cuadratica'])->name('cuadratica.calcular');

// Ejercicio 1.
Route::get('adivina', [AdivinaNumeroController::class, 'mostrarFormulario']);
Route::post('adivina', [AdivinaNumeroController::class, 'procesarIntento'])->name('adivina.jugar');
// Ejercicio 2.
Route::get('factorial', [FactorialController::class, 'mostrarFormulario']);
Route::post('factorial', [FactorialController::class, 'calcular'])->name('factorial.calcular');
// Ejercicio 3.
Route::get('notas', [NotasController::class, 'mostrarFormulario']);
Route::post('notas',[NotasController::class, 'procesarNotas'])->name('notas.procesar');
// Ejercicio 4.
Route::get('tabla', [TablaController::class, 'mostrarFormulario']);
Route::post('tabla', [TablaController::class, 'procesarTabla'])->name('tabla.procesar');
// Ejercicio 5.
Route::get('numero',[NumerosController::class, 'mostrarFormulario']);
Route::post('numero', [NumerosController::class, 'procesarNumero'])->name('numero.procesar');

Route::get('categories/list', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
