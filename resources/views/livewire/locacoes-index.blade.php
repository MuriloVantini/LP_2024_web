<div class="relative overflow-x-auto mx-14 py-10">
    <div class="relative z-0 w-1/4 mb-5 group">
        <input type="text" name="usuario_veiculo" id="usuario_veiculo" wire:model.live="pesquisa"
            class="py-2.5 px-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Pesquisar por usuário, modelo ou marca do veículo" />
    </div>
    @if (count($locacoes) > 0)
        <table class="w-full rounded-lg  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Usuário
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Veículo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data Inicial
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data Final
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Valor total
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locacoes as $locacao)
                    <tr wire:key="locacao-{{ $locacao->id }}"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:bg-gray-50">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $locacao->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $locacao->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $locacao->veiculo->marca }} - {{ $locacao->veiculo->modelo }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $locacao->data_inicio }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $locacao->data_fim }}
                        </td>
                        <td class="px-6 py-4">
                            R$ {{ $locacao->valor_total }}
                        </td>
                        <td class="px-6 py-4">
                            <a class="hover:underline hover:text-white"
                                href="{{ route('locacoes.show', $locacao->id) }}">Visualizar</a>
                            <a class="hover:underline hover:text-white"
                                href="{{ route('locacoes.edit', $locacao->id) }}">Editar</a>
                            @if (auth()->check())
                                <button wire:click="deleteLocacao({{ $locacao->id }})"
                                    class="hover:underline hover:text-red-600">Excluir</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <x-empty-list />
    @endif
</div>
