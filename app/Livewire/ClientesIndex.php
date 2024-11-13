<?php

namespace App\Livewire;

use Livewire\Component;

class ClientesIndex extends Component
{
    public $clientesAgrupados;

    // Recebe os dados do controlador
    public function mount($agrupadasPorUsuario)
    {
        $this->clientesAgrupados = $agrupadasPorUsuario;
    }

    public function render()
    {
        return view('livewire.clientes-index');
    }
}
