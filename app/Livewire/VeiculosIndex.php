<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Veiculo;
use Filament\Notifications\Notification;

class VeiculosIndex extends Component
{
    public $veiculos;
    public $pesquisa = '';

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
        }
    }

    public function render()
    {
        $this->veiculos = Veiculo::where('modelo', 'like', '%' . $this->pesquisa . '%')
        ->orWhere('marca', 'like', '%' . $this->pesquisa . '%')
        ->get();
        return view('livewire.veiculos-index');
    }
}
