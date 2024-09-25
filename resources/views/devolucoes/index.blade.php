<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Devoluções') }}
        </h2>
        <h3 class="font-semibold text-sm underline text-gray-800 dark:text-gray-400 leading-tight dark:hover:text-white">
            <a href="{{ route('devolucoes.create') }}">Adicionar Devolução</a>
        </h3>
    </x-slot>
    @section('content')
        @livewire('devolucoes-index')
    @endsection
</x-app-layout>