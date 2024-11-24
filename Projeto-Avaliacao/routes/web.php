<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\EventoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Rotas para Vagas
    Route::resource('vagas', VagaController::class);

    // Rotas para Cidades
    Route::resource('cidades', CidadeController::class)->except(['show']);

    // Rotas para Relatórios
    Route::get('relatorios', [RelatorioController::class, 'index'])->name('relatorios.index');

    // Rotas para Eventos
    Route::resource('eventos', EventoController::class);
});

require __DIR__ . '/auth.php';
