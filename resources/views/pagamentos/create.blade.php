@extends('layouts.app')

@section('content')
    <h1>Criar Pagamento</h1>
    <form action="{{ route('pagamentos.store') }}" method="POST">
        @csrf

        <label>Locação:</label>
        <select name="locacao_id" required>
            @foreach ($locacoes as $locacao)
                <option value="{{ $locacao->id }}">{{ $locacao->id }}</option>
            @endforeach
        </select>

        <label>Data Pagamento:</label>
        <input type="date" name="data_pagamento" required>

        <label>Valor Pago:</label>
        <input type="number" name="valor_pago" step="0.01" required>

        <label>Método de Pagamento:</label>
        <select name="metodo_pagamento" required>
            <option value="cartao">Cartão</option>
            <option value="dinheiro">Dinheiro</option>
            <option value="transferencia">Transferência</option>
        </select>

        <button type="submit">Salvar</button>
    </form>
@endsection
