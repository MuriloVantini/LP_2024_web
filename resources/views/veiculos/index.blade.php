<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Veículos') }}
        </h2>
        <h3 class="font-semibold text-sm underline text-gray-800 dark:text-gray-400 leading-tight hover:text-white">
            <a href="{{ route('veiculos.create') }}">Adicionar Veículo</a>
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
                            Modelo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Marca
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Preço Diário
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Disponibilidade
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($veiculos as $veiculo)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $veiculo->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $veiculo->modelo }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $veiculo->marca }}
                            </td>
                            <td class="px-6 py-4">
                                R$ {{ $veiculo->preco_diaria }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $veiculo->disponibilidade ? 'Disponível' : 'Alugado' }}
                            </td>
                            <td class="px-6 py-4">
                                <a class="hover:underline hover:text-white"
                                    href="{{ route('veiculos.show', $veiculo->id) }}">Visualizar</a>
                                <a class="hover:underline hover:text-white"
                                    href="{{ route('veiculos.edit', $veiculo->id) }}">Editar</a>
                                <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST"
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
