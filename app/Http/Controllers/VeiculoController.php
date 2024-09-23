<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::all();
        return view('veiculos.index', compact('veiculos'));
    }

    public function create()
    {
        return view('veiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'marca' => 'required',
            'preco_diaria' => 'required|numeric',
        ]);

        Veiculo::create($request->all());
        return redirect()->route('veiculos.index')->with('success', 'Veículo criado com sucesso!');
    }

    public function show($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.show', compact('veiculo'));
    }

    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.edit', compact('veiculo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'modelo' => 'required',
            'marca' => 'required',
            'preco_diaria' => 'required|numeric',
        ]);

        $veiculo = Veiculo::findOrFail($id);
        $veiculo->update($request->all());

        return redirect()->route('veiculos.index')->with('success', 'Veículo atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();

        return redirect()->route('veiculos.index')->with('success', 'Veículo removido com sucesso!');
    }
}
