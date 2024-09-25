<?php

namespace App\Livewire;

use App\Models\Locacao;
use Filament\Notifications\Notification;
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
            Notification::make()->title('Locação excluída com sucesso')->success()->send();
            return redirect()->route('locacoes.index');
        }
    }

    public function render()
    {
        return view('livewire.locacoes-index');
    }
}
