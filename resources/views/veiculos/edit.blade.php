@extends('layouts.app')

@section('content')
    <h1>Editar Veículo</h1>
    <form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Modelo:</label>
        <input type="text" name="modelo" value="{{ $veiculo->modelo }}" required>
        
        <label>Marca:</label>
        <input type="text" name="marca" value="{{ $veiculo->marca }}" required>

        <label>Preço Diário:</label>
        <input type="number" name="preco_diaria" value="{{ $veiculo->preco_diaria }}" step="0.01" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
