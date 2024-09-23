<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::resource('veiculos', VeiculoController::class);
// Route::resource('locacoes', LocacaoController::class);
// Route::resource('pagamentos', PagamentoLocacaoController::class);
// Route::resource('devolucoes', DevolucaoVeiculoController::class);

use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\PagamentoLocacaoController;
use App\Http\Controllers\DevolucaoVeiculoController;

// Rotas para Veiculos
Route::get('veiculos', [VeiculoController::class, 'index'])->name('veiculos.index');
Route::get('veiculos/create', [VeiculoController::class, 'create'])->name('veiculos.create');
Route::post('veiculos', [VeiculoController::class, 'store'])->name('veiculos.store');
Route::get('veiculos/{veiculo}', [VeiculoController::class, 'show'])->name('veiculos.show');
Route::get('veiculos/{veiculo}/edit', [VeiculoController::class, 'edit'])->name('veiculos.edit');
Route::put('veiculos/{veiculo}', [VeiculoController::class, 'update'])->name('veiculos.update');
Route::delete('veiculos/{veiculo}', [VeiculoController::class, 'destroy'])->name('veiculos.destroy');

// Rotas para Locacoes
Route::get('locacoes', [LocacaoController::class, 'index'])->name('locacoes.index');
Route::get('locacoes/create', [LocacaoController::class, 'create'])->name('locacoes.create');
Route::post('locacoes', [LocacaoController::class, 'store'])->name('locacoes.store');
Route::get('locacoes/{locacao}', [LocacaoController::class, 'show'])->name('locacoes.show');
Route::get('locacoes/{locacao}/edit', [LocacaoController::class, 'edit'])->name('locacoes.edit');
Route::put('locacoes/{locacao}', [LocacaoController::class, 'update'])->name('locacoes.update');
Route::delete('locacoes/{locacao}', [LocacaoController::class, 'destroy'])->name('locacoes.destroy');

// Rotas para Pagamentos
Route::get('pagamentos', [PagamentoLocacaoController::class, 'index'])->name('pagamentos.index');
Route::get('pagamentos/create', [PagamentoLocacaoController::class, 'create'])->name('pagamentos.create');
Route::post('pagamentos', [PagamentoLocacaoController::class, 'store'])->name('pagamentos.store');
Route::get('pagamentos/{pagamento}', [PagamentoLocacaoController::class, 'show'])->name('pagamentos.show');
Route::get('pagamentos/{pagamento}/edit', [PagamentoLocacaoController::class, 'edit'])->name('pagamentos.edit');
Route::put('pagamentos/{pagamento}', [PagamentoLocacaoController::class, 'update'])->name('pagamentos.update');
Route::delete('pagamentos/{pagamento}', [PagamentoLocacaoController::class, 'destroy'])->name('pagamentos.destroy');

// Rotas para Devolucoes
Route::get('devolucoes', [DevolucaoVeiculoController::class, 'index'])->name('devolucoes.index');
Route::get('devolucoes/create', [DevolucaoVeiculoController::class, 'create'])->name('devolucoes.create');
Route::post('devolucoes', [DevolucaoVeiculoController::class, 'store'])->name('devolucoes.store');
Route::get('devolucoes/{devolucao}', [DevolucaoVeiculoController::class, 'show'])->name('devolucoes.show');
Route::get('devolucoes/{devolucao}/edit', [DevolucaoVeiculoController::class, 'edit'])->name('devolucoes.edit');
Route::put('devolucoes/{devolucao}', [DevolucaoVeiculoController::class, 'update'])->name('devolucoes.update');
Route::delete('devolucoes/{devolucao}', [DevolucaoVeiculoController::class, 'destroy'])->name('devolucoes.destroy');

require __DIR__.'/auth.php';
