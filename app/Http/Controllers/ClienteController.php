<?php

namespace App\Http\Controllers;

use App\Models\Locacao;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // Carregar locações dos usuários
        $locacoes = Locacao::with(['veiculo', 'user'])->get();

        // Agrupar locações por usuário e somar o valor total de locações por usuário
        $agrupadasPorUsuario = $locacoes->groupBy('user_id')->map(function ($locacoesUsuario) {
            return [
                'usuario' => $locacoesUsuario->first()->user,
                'quantidade_locacoes' => $locacoesUsuario->count(),
                'valor_total' => $locacoesUsuario->sum('valor_total'),
            ];
        });

        return view('clientes.index', compact('agrupadasPorUsuario'));
    }


    public function create() {}

    public function store(Request $request) {}

    public function show($id) {}

    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
