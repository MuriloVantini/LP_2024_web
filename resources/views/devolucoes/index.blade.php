<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Devoluções') }}
        </h2>
        <h3 class="font-semibold text-sm underline text-gray-800 dark:text-gray-400 leading-tight hover:text-white">
            <a href="{{ route('devolucoes.create') }}">Adicionar Devolução</a>
        </h3>
    </x-slot>
    @section('content')
        <div class="relative overflow-x-auto mx-14 py-10">
            <table class="w-full rounded-lg  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Locação
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Data da Devolução
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status do Veículo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Multa
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($devolucoes as $devolucao)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $devolucao->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $devolucao->locacao->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $devolucao->data_devolucao }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $devolucao->status_veiculo }}
                            </td>
                            <td class="px-6 py-4">
                                R$ {{ $devolucao->multa }}
                            </td>
                            <td class="px-6 py-4">
                                <a class="hover:underline hover:text-white"
                                    href="{{ route('devolucoes.show', $devolucao->id) }}">Visualizar</a>
                                <a class="hover:underline hover:text-white"
                                    href="{{ route('devolucoes.edit', $devolucao->id) }}">Editar</a>
                                <form action="{{ route('devolucoes.destroy', $devolucao->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="hover:underline hover:text-red-600" type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
