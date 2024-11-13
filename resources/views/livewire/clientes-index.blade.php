<div class="relative overflow-x-auto mx-14 py-10">
    <div class="relative z-0 w-1/4 mb-5 group">
        <input type="text" name="nome" id="nome" wire:model.live="pesquisa"
            class="py-2.5 px-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Pesquisar por nome" />
    </div>
    @if (count($clientesAgrupados) > 0)
    <table class="w-full rounded-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID do Usuário</th>
                <th scope="col" class="px-6 py-3">Nome</th>
                <th scope="col" class="px-6 py-3">Quantidade de Locações</th>
                <th scope="col" class="px-6 py-3">Valor Total de Locações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientesAgrupados as $cliente)
                <tr wire:key="cliente-{{ $cliente['usuario']->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $cliente['usuario']->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $cliente['usuario']->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $cliente['quantidade_locacoes'] }}
                    </td>
                    <td class="px-6 py-4">
                        R$ {{ number_format($cliente['valor_total'], 2, ',', '.') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <x-empty-list />
    @endif
</div>
