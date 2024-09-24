<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Pagamentos') }}
        </h2>
        <h3 class="font-semibold text-sm underline text-gray-800 dark:text-gray-400 leading-tight dark:hover:text-white">
            <a href="{{ route('pagamentos.create') }}">Adicionar Pagamento</a>
        </h3>
    </x-slot>
    @section('content')
        @livewire('pagamentos-index')
    @endsection
</x-app-layout>
