@extends('layouts.app')

@section('content')
    <h1>Criar Devolução</h1>
    <form action="{{ route('devolucoes.store') }}" method="POST">
        @csrf

        <label>Locação:</label>
        <select name="locacao_id" required>
            @foreach ($locacoes as $locacao)
                <option value="{{ $locacao->id }}">{{ $locacao->id }}</option>
            @endforeach
        </select>

        <label>Data Devolução:</label>
        <input type="date" name="data_devolucao" required>

        <label>Status do Veículo:</label>
        <select name="status_veiculo" required>
            <option value="completo">Completo</option>
            <option value="danificado">Danificado</option>
        </select>

        <label>Multa:</label>
        <input type="number" name="multa" step="0.01" value="0.00">

        <button type="submit">Salvar</button>
    </form>
@endsection
