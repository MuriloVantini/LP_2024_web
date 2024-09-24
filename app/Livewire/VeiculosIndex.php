<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Veiculo;

class VeiculosIndex extends Component
{
    public $veiculos;

    public function mount()
    {
        $this->veiculos = Veiculo::all();
    }

    public function deleteVeiculo($id)
    {
        $veiculo = Veiculo::find($id);

        if ($veiculo) {
            $veiculo->delete();
            $this->veiculos = Veiculo::all();
            session()->flash('message', 'Veículo excluído com sucesso.');
        }
    }

    public function render()
    {
        return view('livewire.veiculos-index');
    }
}
