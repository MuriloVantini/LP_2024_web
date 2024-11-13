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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('veiculos', VeiculoController::class);
Route::resource('locacoes', LocacaoController::class);
Route::resource('pagamentos', PagamentoLocacaoController::class);
Route::resource('devolucoes', DevolucaoVeiculoController::class);

Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');;

require __DIR__ . '/auth.php';
