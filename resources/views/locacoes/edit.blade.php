@extends('layouts.app')

@section('content')
    <h1>Editar Locação</h1>
    <form action="{{ route('locacoes.update', $locacao->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Usuário:</label>
        <select name="user_id" required>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $user->id == $locacao->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>

        <label>Veículo:</label>
        <select name="veiculo_id" required>
            @foreach ($veiculos as $veiculo)
                <option value="{{ $veiculo->id }}" {{ $veiculo->id == $locacao->veiculo_id ? 'selected' : '' }}>{{ $veiculo->modelo }}</option>
            @endforeach
        </select>

        <label>Data Início:</label>
        <input type="date" name="data_inicio" value="{{ $locacao->data_inicio }}" required>

        <label>Data Fim:</label>
        <input type="date" name="data_fim" value="{{ $locacao->data_fim }}" required>

        <label>Valor Total:</label>
        <input type="number" name="valor_total" value="{{ $locacao->valor_total }}" step="0.01" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
