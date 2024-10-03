<?php

namespace App\Http\Controllers;

use App\Models\DevolucaoVeiculo;
use App\Models\Locacao;
use DateTime;
use Illuminate\Http\Request;

class DevolucaoVeiculoController extends Controller
{
    public function index()
    {
        return view('devolucoes.index');
    }

    public function create()
    {
        $locacoes = Locacao::all();
        return view('devolucoes.create', compact('locacoes'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'locacao_id' => 'required|exists:locacoes,id',
            'data_devolucao' => 'required|date',
            'status_veiculo' => 'required|in:completo,danificado',
            'multa' => 'nullable|numeric',
        ]);

        DevolucaoVeiculo::create($request->all());
        return redirect()->route('devolucoes.index')->with('success', 'Devolução registrada com sucesso!');
    }

    public function show($id)
    {
        $devolucao = DevolucaoVeiculo::with('locacao')->findOrFail($id);
        return view('devolucoes.show', compact('devolucao'));
    }

    public function edit($id)
    {
        $devolucao = DevolucaoVeiculo::findOrFail($id);
        return view('devolucoes.edit', compact('devolucao'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'data_devolucao' => 'required|date',
            'status_veiculo' => 'required|in:completo,danificado',
            'multa' => 'required|numeric|min:0',
        ]);

        $devolucao = DevolucaoVeiculo::findOrFail($id);
        $devolucao->update($request->all());

        return redirect()->route('devolucoes.index', $devolucao->id)->with('success', 'Devolução atualizada com sucesso!');
    }


    public function destroy($id)
    {
        $devolucao = DevolucaoVeiculo::findOrFail($id);
        $devolucao->delete();

        return redirect()->route('devolucoes.index')->with('success', 'Devolução removida com sucesso!');
    }
}
