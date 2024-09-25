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
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                        <button wire:click="deleteDevolucao({{ $devolucao->id }})"
                            class="hover:underline hover:text-red-600">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
