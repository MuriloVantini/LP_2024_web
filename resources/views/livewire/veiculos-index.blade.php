<div class="relative overflow-x-auto mx-14 py-10">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 mb-4">
            {{ session('message') }}
        </div>
    @endif
    
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $veiculo->id }}
                    </th>
                    <td class="px-6 py-4">{{ $veiculo->modelo }}</td>
                    <td class="px-6 py-4">{{ $veiculo->marca }}</td>
                    <td class="px-6 py-4">R$ {{ $veiculo->preco_diaria }}</td>
                    <td class="px-6 py-4">{{ $veiculo->disponibilidade ? 'Disponível' : 'Alugado' }}</td>
                    <td class="px-6 py-4">
                        <a class="hover:underline hover:text-white" href="{{ route('veiculos.show', $veiculo->id) }}">Visualizar</a>
                        <a class="hover:underline hover:text-white" href="{{ route('veiculos.edit', $veiculo->id) }}">Editar</a>
                        <button wire:click="deleteVeiculo({{ $veiculo->id }})" class="hover:underline hover:text-red-600">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

