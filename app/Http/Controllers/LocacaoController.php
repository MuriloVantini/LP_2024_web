<?php

namespace App\Http\Controllers;

use App\Models\Locacao;
use App\Models\Veiculo;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class LocacaoController extends Controller
{
    public function index()
    {
        return view('locacoes.index');
    }

    public function create()
    {
        $veiculos = Veiculo::where('disponibilidade', true)->get();
        $users = User::all();
        return view('locacoes.create', compact('veiculos', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate(rules: [
            'user_id' => 'required|exists:users,id',
            'veiculo_id' => 'required|exists:veiculos,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio',
        ]);

        // Obter veiculo para obter o preço da diária
        $veiculo = Veiculo::findOrFail($request->veiculo_id);

        //quantidade de dias * preço diaria
        $dataInicio = new DateTime($request->data_inicio);
        $dataFim = new DateTime($request->data_fim);
        $dias = $dataInicio->diff($dataFim)->days;
        $valorTotal = $dias * $veiculo->preco_diaria;

        Locacao::create([
            'user_id' => $request->user_id,
            'veiculo_id' => $request->veiculo_id,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim,
            'valor_total' => $valorTotal,
        ]);

        return redirect()->route('locacoes.index')->with('success', 'Locação criada com sucesso!');
    }

    public function show($id)
    {
        $locacao = Locacao::with(['veiculo', 'user'])->findOrFail($id);
        return view('locacoes.show', compact('locacao'));
    }

    public function edit($id)
    {
        $locacao = Locacao::findOrFail($id);
        $veiculos = Veiculo::where('disponibilidade', true)->get();
        $users = User::all();
        return view('locacoes.edit', compact('locacao', 'veiculos', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'veiculo_id' => 'required|exists:veiculos,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio',
        ]);

        $locacao = Locacao::findOrFail($id);

        // Obter veiculo para obter o preço da diária
        $veiculo = Veiculo::findOrFail($request->veiculo_id);

        $dataInicio = new DateTime($request->data_inicio);
        $dataFim = new DateTime($request->data_fim);
        $dias = $dataInicio->diff($dataFim)->days;
        $valorTotal = $dias * $veiculo->preco_diaria;

        $locacao->update([
            'user_id' => $request->user_id,
            'veiculo_id' => $request->veiculo_id,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim,
            'valor_total' => $valorTotal,
        ]);

        return redirect()->route('locacoes.index')->with('success', 'Locação atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $locacao = Locacao::findOrFail($id);
        $locacao->delete();

        return redirect()->route('locacoes.index')->with('success', 'Locação removida com sucesso!');
    }
}
