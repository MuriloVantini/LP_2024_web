@extends('layouts.app')

@section('content')
    <h1>Lista de Pagamentos</h1>
    <a href="{{ route('pagamentos.create') }}">Adicionar Pagamento</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Locação</th>
                <th>Data Pagamento</th>
                <th>Valor Pago</th>
                <th>Método de Pagamento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagamentos as $pagamento)
                <tr>
                    <td>{{ $pagamento->id }}</td>
                    <td>{{ $pagamento->locacao->id }}</td>
                    <td>{{ $pagamento->data_pagamento }}</td>
                    <td>{{ $pagamento->valor_pago }}</td>
                    <td>{{ $pagamento->metodo_pagamento }}</td>
                    <td>
                        <a href="{{ route('pagamentos.show', $pagamento->id) }}">Mostrar</a>
                        <a href="{{ route('pagamentos.edit', $pagamento->id) }}">Editar</a>
                        <form action="{{ route('pagamentos.destroy', $pagamento->id) }}" method="POST" style="display:inline;">
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
