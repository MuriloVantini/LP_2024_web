<?php

namespace App\Livewire;

use Livewire\Component;

class ClientesIndex extends Component
{
    public $clientesAgrupados;
    public $clientesOriginais;
    public $pesquisa = '';

    // Recebe os dados do controlador
    public function mount($agrupadasPorUsuario)
    {
        $this->clientesOriginais = $agrupadasPorUsuario;
        $this->clientesAgrupados = $agrupadasPorUsuario;
    }

    // Método para filtrar os clientes pelo nome do usuário
    public function updatedPesquisa()
    {
        // Restaura a lista completa dos dados originais antes de aplicar o filtro
        $this->clientesAgrupados = collect($this->clientesOriginais)->filter(function ($grupo) {
            return str_contains(strtolower($grupo['usuario']->name), strtolower($this->pesquisa));
        })->toArray();
    }

    public function render()
    {
        $this->updatedPesquisa();
        return view('livewire.clientes-index', [
            'clientes' => $this->clientesAgrupados,
        ]);
    }
}
