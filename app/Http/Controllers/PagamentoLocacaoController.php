<?php

namespace App\Http\Controllers;

use App\Models\PagamentoLocacao;
use App\Models\Locacao;
use Illuminate\Http\Request;

class PagamentoLocacaoController extends Controller
{
    public function index()
    {
        $pagamentos = PagamentoLocacao::with('locacao')->get();
        return view('pagamentos.index', compact('pagamentos'));
    }

    public function create()
    {
        $locacoes = Locacao::all();
        return view('pagamentos.create', compact('locacoes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'locacao_id' => 'required|exists:locacoes,id',
            'data_pagamento' => 'required|date',
            'valor_pago' => 'required|numeric',
            'metodo_pagamento' => 'required|in:cartao,dinheiro,transferencia',
        ]);

        PagamentoLocacao::create($request->all());
        return redirect()->route('pagamentos.index')->with('success', 'Pagamento realizado com sucesso!');
    }

    public function edit($id)
    {
        $pagamento = PagamentoLocacao::findOrFail($id);
        return view('pagamentos.edit', compact('pagamento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'data_pagamento' => 'required|date',
            'valor_pago' => 'required|numeric',
            'metodo_pagamento' => 'required|in:cartao,dinheiro,transferencia',
        ]);

        $pagamento = PagamentoLocacao::findOrFail($id);
        $pagamento->update($request->all());

        return redirect()->route('pagamentos.index')->with('success', 'Pagamento atualizado com sucesso!');
    }

    public function show($id)
    {
        $pagamento = PagamentoLocacao::with('locacao')->findOrFail($id);
        return view('pagamentos.show', compact('pagamento'));
    }

    public function destroy($id)
    {
        $pagamento = PagamentoLocacao::findOrFail($id);
        $pagamento->delete();

        return redirect()->route('pagamentos.index')->with('success', 'Pagamento removido com sucesso!');
    }
}
