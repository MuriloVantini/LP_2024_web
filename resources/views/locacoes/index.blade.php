@extends('layouts.app')

@section('content')
    <h1>Lista de Locações</h1>
    <a href="{{ route('locacoes.create') }}">Adicionar Locação</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Veículo</th>
                <th>Data Início</th>
                <th>Data Fim</th>
                <th>Valor Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locacoes as $locacao)
                <tr>
                    <td>{{ $locacao->id }}</td>
                    <td>{{ $locacao->user->name }}</td>
                    <td>{{ $locacao->veiculo->modelo }}</td>
                    <td>{{ $locacao->data_inicio }}</td>
                    <td>{{ $locacao->data_fim }}</td>
                    <td>{{ $locacao->valor_total }}</td>
                    <td>
                        <a href="{{ route('locacoes.show', $locacao->id) }}">Mostrar</a>
                        <a href="{{ route('locacoes.edit', $locacao->id) }}">Editar</a>
                        <form action="{{ route('locacoes.destroy', $locacao->id) }}" method="POST" style="display:inline;">
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
