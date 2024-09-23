@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">Detalhes da Locação</h1>

        <div class="mt-4 bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold">Veículo: {{ $locacao->veiculo->modelo }}</h2>
            <p><strong>Usuário:</strong> {{ $locacao->user->name }}</p>
            <p><strong>Data de Início:</strong> {{ $locacao->data_inicio }}</p>
            <p><strong>Data de Fim:</strong> {{ $locacao->data_fim }}</p>
            <p><strong>Valor Total:</strong> R$ {{ number_format($locacao->valor_total, 2, ',', '.') }}</p>

            <div class="mt-6">
                <a href="{{ route('locacoes.edit', $locacao->id) }}" class="text-blue-500 hover:underline">Editar</a>
                <form action="{{ route('locacoes.destroy', $locacao->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Deletar</button>
                </form>
                <a href="{{ route('locacoes.index') }}" class="ml-4 text-gray-500 hover:underline">Voltar para a lista</a>
            </div>
        </div>
    </div>
@endsection
