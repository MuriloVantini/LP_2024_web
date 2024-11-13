<?php

namespace App\Livewire;

use App\Models\DevolucaoVeiculo;
use Filament\Notifications\Notification;
use Livewire\Component;

class DevolucoesIndex extends Component
{
    public $devolucoes;
    public $pesquisa = '';

    public function mount()
    {
        $this->devolucoes = DevolucaoVeiculo::with('locacao')->get();
    }

    public function deleteDevolucao($id)
    {
        $devolucao = DevolucaoVeiculo::find($id);

        if ($devolucao) {
            $devolucao->delete();
            $this->reset('devolucoes');
            $this->devolucoes = DevolucaoVeiculo::with('locacao')->get();
            Notification::make()->title('Devolução excluída com sucesso')->success()->send();
        }
    }


    public function render()
    {
        $this->devolucoes = DevolucaoVeiculo::where('data_devolucao', 'like', '%' . $this->pesquisa . '%')
        ->get();
        return view('livewire.devolucoes-index');
    }
}
