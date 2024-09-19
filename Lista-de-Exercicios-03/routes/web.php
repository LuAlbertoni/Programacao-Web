<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Exercício 01
Route::get('/ex01', [ListaController::class, 'mostrarEx01']);
Route::post('/respostaEx01', [ListaController::class, 'calcularEx01']);

// Exercício 02
Route::get('/ex02', [ListaController::class, 'mostrarEx02']);
Route::post('/respostaEx02', [ListaController::class, 'calcularEx02']);

// Exercício 03
Route::get('/ex03', [ListaController::class, 'mostrarEx03']);
Route::post('/respostaEx03', [ListaController::class, 'calcularEx03']);

// Exercício 04
Route::get('/ex04', [ListaController::class, 'mostrarEx04']);
Route::post('/respostaEx04', [ListaController::class, 'calcularEx04']);