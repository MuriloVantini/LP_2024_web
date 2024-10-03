<?php

namespace App\Livewire;

use App\Models\PagamentoLocacao;
use Filament\Notifications\Notification;
use Livewire\Component;

class PagamentosIndex extends Component
{

    public $pagamentos;

    public function mount()
    {
        $this->pagamentos = PagamentoLocacao::with('locacao')->get();
    }

    public function deletePagamento($id)
    {
        $pagamento = PagamentoLocacao::find($id);

        if ($pagamento) {
            $pagamento->delete();
            $this->pagamentos = PagamentoLocacao::with('locacao')->get();
            Notification::make()->title('Pagamento excluído com sucesso')->success()->send();
        }
    }

    public function render()
    {
        return view('livewire.pagamentos-index');
    }
}
