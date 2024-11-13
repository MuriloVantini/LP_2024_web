<?php

namespace App\Livewire;

use App\Models\PagamentoLocacao;
use Filament\Notifications\Notification;
use Livewire\Component;

class PagamentosIndex extends Component
{

    public $pagamentos;
    public $pesquisa = '';

    public function mount()
    {
        $this->pagamentos = PagamentoLocacao::with('locacao')->get();
    }

    public function deletePagamento($id)
    {
        $pagamento = PagamentoLocacao::find($id);

        if ($pagamento) {
            $pagamento->delete();
            $this->reset('pagamentos');
            $this->pagamentos = PagamentoLocacao::with('locacao')->get();
            Notification::make()->title('Pagamento excluído com sucesso')->success()->send();
        }
    }

    public function render()
    {
        $this->pagamentos = PagamentoLocacao::where('data_pagamento', 'like', '%' . $this->pesquisa . '%')
        ->get();
        return view('livewire.pagamentos-index');
    }
}
