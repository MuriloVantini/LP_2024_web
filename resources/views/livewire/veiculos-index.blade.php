<div class="relative overflow-x-auto mx-14 py-10">
    <div class="relative z-0 w-1/4 mb-5 group">
        <input type="text" name="modelo" id="modelo" wire:model.live="pesquisa"
            class="py-2.5 px-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Pesquisar por modelo ou marca" />
    </div>
    @if (count($veiculos) > 0)
    <table class="w-full rounded-lg  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Modelo</th>
                <th scope="col" class="px-6 py-3">Marca</th>
                <th scope="col" class="px-6 py-3">Preço Diário</th>
                <th scope="col" class="px-6 py-3">Disponibilidade</th>
                <th scope="col" class="px-6 py-3">Ações</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($veiculos as $veiculo)
                    <tr wire:key="veiculo-{{ $veiculo->id }}"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:bg-gray-50">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $veiculo->id }}
                        </th>
                        <td class="px-6 py-4">{{ $veiculo->modelo }}</td>
                        <td class="px-6 py-4">{{ $veiculo->marca }}</td>
                        <td class="px-6 py-4">R$ {{ $veiculo->preco_diaria }}</td>
                        <td class="px-6 py-4">{{ $veiculo->disponibilidade ? 'Disponível' : 'Alugado' }}</td>
                        <td class="px-6 py-4">
                            <a class="hover:underline hover:text-white"
                                href="{{ route('veiculos.show', $veiculo->id) }}">Visualizar</a>
                            <a class="hover:underline hover:text-white"
                                href="{{ route('veiculos.edit', $veiculo->id) }}">Editar</a>
                            <button wire:click="deleteVeiculo({{ $veiculo->id }})"
                                class="hover:underline hover:text-red-600">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <x-empty-list/>
            @endif
        </tbody>

    </table>
</div>
