<?php

namespace App\Livewire;

use App\Models\Locacao;
use Livewire\Component;

class LocacoesIndex extends Component
{

    public $locacoes;

    public function mount()
    {
        $this->locacoes = Locacao::with(['veiculo', 'user'])->get();
    }

    public function deleteLocacao($id)
    {
        $locacao = Locacao::find($id);

        if ($locacao) {
            $locacao->delete();
            $this->locacoes = Locacao::with(['veiculo', 'user'])->get();
            session()->flash('message', 'Locacao excluída com sucesso.');
        }
    }

    public function render()
    {
        return view('livewire.locacoes-index');
    }
}
