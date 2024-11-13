<?php

namespace App\Livewire;

use App\Models\Locacao;
use Filament\Notifications\Notification;
use Livewire\Component;

class LocacoesIndex extends Component
{

    public $locacoes;
    public $pesquisa = '';

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
            Notification::make()->title('Locação excluída com sucesso')->success()->send();
        }
    }

    public function render()
    {
        $this->locacoes = Locacao::whereHas('veiculo', function ($query) {
            $query->where('modelo', 'like', '%' . $this->pesquisa . '%')
                  ->orWhere('marca', 'like', '%' . $this->pesquisa . '%');
        })
        ->orWhereHas('user', function ($query) {
            $query->where('name', 'like', '%' . $this->pesquisa . '%');
        })
        ->with(['veiculo', 'user'])
        ->get();
    
        return view('livewire.locacoes-index');
    }
}
