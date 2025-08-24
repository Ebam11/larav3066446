<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\AdivinaNumeroController;
use App\Http\Controllers\FactorialController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\TablaController;

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
