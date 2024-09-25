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
        $dateInicio = DateTime::createFromFormat('m/d/Y', $request->data_inicio);
        $dateInicioConvertida =  $dateInicio->format('Y-m-d');
        $dateFim = DateTime::createFromFormat('m/d/Y', $request->data_fim);
        $dateFimConvertida =  $dateFim->format('Y-m-d');
        $request['data_inicio'] = $dateInicioConvertida;
        $request['data_fim'] = $dateFimConvertida;
        $request->validate(rules: [
            'user_id' => 'required|exists:users,id',
            'veiculo_id' => 'required|exists:veiculos,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio',
            'valor_total' => 'required|numeric',
        ]);

        Locacao::create($request->all());
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
        $dateInicio = DateTime::createFromFormat('m/d/Y', $request->data_inicio);
        $dateInicioConvertida =  $dateInicio->format('Y-m-d');
        $dateFim = DateTime::createFromFormat('m/d/Y', $request->data_fim);
        $dateFimConvertida =  $dateFim->format('Y-m-d');
        $request['data_inicio'] = $dateInicioConvertida;
        $request['data_fim'] = $dateFimConvertida;
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'veiculo_id' => 'required|exists:veiculos,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio',
            'valor_total' => 'required|numeric',
        ]);

        $locacao = Locacao::findOrFail($id);
        $locacao->update($request->all());

        return redirect()->route('locacoes.index')->with('success', 'Locação atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $locacao = Locacao::findOrFail($id);
        $locacao->delete();

        return redirect()->route('locacoes.index')->with('success', 'Locação removida com sucesso!');
    }
}
