<?php

namespace App\Livewire;

use App\Models\DevolucaoVeiculo;
use Livewire\Component;

class DevolucoesIndex extends Component
{
    public $devolucoes;

    public function mount()
    {
        $this->devolucoes = DevolucaoVeiculo::with('locacao')->get();
    }

    public function deleteDevolucao($id)
    {
        $devolucao = DevolucaoVeiculo::find($id);

        if ($devolucao) {
            $devolucao->delete();
            $this->devolucoes = DevolucaoVeiculo::with('locacao')->get();
            session()->flash('message', 'Devolucao excluída com sucesso.');
        }
    }


    public function render()
    {
        return view('livewire.devolucoes-index');
    }
}
