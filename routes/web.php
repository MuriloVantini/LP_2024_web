<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\PagamentoLocacaoController;
use App\Http\Controllers\DevolucaoVeiculoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('veiculos', VeiculoController::class)->only(['index', 'show']);
Route::resource('locacoes', LocacaoController::class)->only(['index', 'show']);
Route::resource('pagamentos', PagamentoLocacaoController::class)->only(['index', 'show']);
Route::resource('devolucoes', DevolucaoVeiculoController::class)->only(['index', 'show']);

// Rotas protegidas por autenticação (edit, create, update, destroy)
Route::middleware('auth')->group(function () {
    Route::resource('veiculos', VeiculoController::class)->except(['index', 'show']);
    Route::resource('locacoes', LocacaoController::class)->except(['index', 'show']);
    Route::resource('pagamentos', PagamentoLocacaoController::class)->except(['index', 'show']);
    Route::resource('devolucoes', DevolucaoVeiculoController::class)->except(['index', 'show']);

    // Rotas do perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');;

require __DIR__ . '/auth.php';
