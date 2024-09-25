<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalhes da Devolução') }}
        </h2>

    </x-slot>
    @section('content')
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <a href="{{ route('devolucoes.index') }}" class="ml-2 mt-2 text-gray-500 hover:underline">Voltar para a
                lista</a>
            <div
                class="mt-4 bg-white dark:text-gray-100 dark:bg-gray-800 shadow rounded-lg p-6 flex flex-row items-center justify-between">
                <div class=" flex flex-col items-start">
                    <h2 class="text-xl font-semibold">Locação: {{ $devolucao->locacao->id }}</h2>
                    <p><strong>Data de devolução:</strong> {{ $devolucao->data_devolucao }}</p>
                    <p><strong>Status do veículo:</strong> {{ ucfirst($devolucao->status_veiculo) }}</p>
                    <p><strong>Multa:</strong> R$ {{ number_format($devolucao->multa, 2, ',', '.') }}</p>
                </div>
                <div class="mt-6 flex flex-col items-end">
                    <a href="{{ route('devolucoes.edit', $devolucao->id) }}"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                        <p class="pl-1">Editar</p>
                    </a>
                    <form action="{{ route('devolucoes.destroy', $devolucao->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Excluir</button>
                    </form>
                </div>
            </div>

        </div>
    @endsection
</x-app-layout>

