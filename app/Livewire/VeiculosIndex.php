<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Veiculo;
use Filament\Notifications\Notification;

class VeiculosIndex extends Component
{
    public $veiculos;
    protected $listerners = ['dataDeleted', 'dataSaved'];
    public function mount()
    {
        $this->veiculos = Veiculo::all();
    }

    public function deleteVeiculo($id)
    {
        $veiculo = Veiculo::find($id);

        if ($veiculo) {
            $veiculo->delete();
            $this->reset('veiculos');
            $this->veiculos = Veiculo::all();
            Notification::make()->title('Veículo excluído com sucesso')->success()->send();
            return redirect()->route('veiculos.index');
        }
    }

    public function render()
    {
        return view('livewire.veiculos-index');
    }
}
