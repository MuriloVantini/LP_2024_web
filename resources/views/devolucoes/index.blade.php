<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Devoluções') }}
        </h2>
        <h3 class="font-semibold text-sm underline text-gray-800 dark:text-gray-400 leading-tight dark:hover:text-white">
            <a href="{{ route('devolucoes.create') }}">Adicionar Devolução</a>
        </h3>
    </x-slot>
    @section('content')
        @livewire('devolucoes-index')
    @endsection
</x-app-layout>
{{-- 
@section('content')
    <h1>Lista de Devoluções</h1>
    <a href="{{ route('devolucoes.create') }}">Adicionar Devolução</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Locação</th>
                <th>Data Devolução</th>
                <th>Status do Veículo</th>
                <th>Multa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            //@foreach ($devolucoes as $devolucao)
                <tr>
                    <td>{{ $devolucao->id }}</td>
                    <td>{{ $devolucao->locacao->id }}</td>
                    <td>{{ $devolucao->data_devolucao }}</td>
                    <td>{{ $devolucao->status_veiculo }}</td>
                    <td>{{ $devolucao->multa }}</td>
                    <td>
                        <a href="{{ route('devolucoes.show', $devolucao->id) }}">Mostrar</a>
                        <a href="{{ route('devolucoes.edit', $devolucao->id) }}">Editar</a>
                        <form action="{{ route('devolucoes.destroy', $devolucao->id) }}" method="POST" style="display:inline;">
                            //@csrf
                            //@method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            //@endforeach
        </tbody>
    </table>
@endsection --}}
