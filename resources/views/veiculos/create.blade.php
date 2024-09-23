@extends('layouts.app')

@section('content')
    <h1>Criar Veículo</h1>
    <form action="{{ route('veiculos.store') }}" method="POST">
        @csrf
        <label>Modelo:</label>
        <input type="text" name="modelo" required>
        
        <label>Marca:</label>
        <input type="text" name="marca" required>

        <label>Preço Diário:</label>
        <input type="number" name="preco_diaria" step="0.01" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
