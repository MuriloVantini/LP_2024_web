@extends('layouts.app')

@section('content')
    <h1>Lista de Veículos</h1>
    <a href="{{ route('veiculos.create') }}">Adicionar Veículo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Preço Diário</th>
                <th>Disponibilidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($veiculos as $veiculo)
                <tr>
                    <td>{{ $veiculo->id }}</td>
                    <td>{{ $veiculo->modelo }}</td>
                    <td>{{ $veiculo->marca }}</td>
                    <td>{{ $veiculo->preco_diaria }}</td>
                    <td>{{ $veiculo->disponibilidade ? 'Sim' : 'Não' }}</td>
                    <td>
                        <a href="{{ route('veiculos.show', $veiculo->id) }}">Mostrar</a>
                        <a href="{{ route('veiculos.edit', $veiculo->id) }}">Editar</a>
                        <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
