<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\CidadeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/vagas', [VagaController::class, 'index'])->name('vagas.index');
    Route::get('/vagas/create', [VagaController::class, 'create'])->name('vagas.create');
    Route::get('/vagas/{vaga}', [VagaController::class, 'show'])->name('vagas.show');
    Route::post('/vagas/create', [VagaController::class, 'store'])->name('vagas.store');

    Route::get('/cidades', [CidadeController::class, 'index'])->name('cidades.index');
    Route::get('/cidades/create', [CidadeController::class, 'create'])->name('cidades.create');
    Route::get('/cidades/{Cidade}', [CidadeController::class, 'show'])->name('cidades.show');
    Route::post('/cidades/create', [CidadeController::class, 'store'])->name('cidades.store');
});


require __DIR__ . '/auth.php';
