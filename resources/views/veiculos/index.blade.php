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
        @livewire('veiculos-index')
    @endsection
</x-app-layout>
