<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Atualização de Devolução') }}
        </h2>
    </x-slot>
    @section('content')
        <br><br>
        <form class="max-w-md mx-auto" action="{{ route('devolucoes.update', $devolucao->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="date-picker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data da
                devolução</label>
            <div id="date-picker" class="relative w-full mb-5">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input name="data_devolucao" id="datepicker-autohide" datepicker datepicker-autohide
                datepicker-format="yyyy-mm-dd"
                    value="{{ old('data_devolucao', $devolucao->data_devolucao) }}" type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Selecione uma data">
            </div>

            <label for="multa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Multa</label>
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" name="multa" id="multa" value="{{ old('multa', $devolucao->multa) }}"
                    step="0.01"
                    class="py-2.5 px-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder=" " required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="statusVeiculo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Condição do
                    veículo</label>
                <select name="status_veiculo" id="statusVeiculo" step="0.01"
                    class="py-2.5 px-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder=" " required>
                    <option class="dark:bg-gray-900" value="completo"
                        {{ $devolucao->status_veiculo == 'completo' ? 'selected' : '' }}>Completo
                    </option>
                    <option class="dark:bg-gray-900" value="danificado"
                        {{ $devolucao->status_veiculo == 'danificado' ? 'selected' : '' }}>Danificado
                    </option>
                </select>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Atualizar</button>
        </form>
    @endsection
</x-app-layout>
