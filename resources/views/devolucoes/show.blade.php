@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">Detalhes da Devolução</h1>

        <div class="mt-4 bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            <p><strong>Locação:</strong> {{ $devolucao->locacao->id }}</p>
            <p><strong>Data de Devolução:</strong> {{ $devolucao->data_devolucao }}</p>
            <p><strong>Status do Veículo:</strong> {{ ucfirst($devolucao->status_veiculo) }}</p>
            <p><strong>Multa:</strong> R$ {{ number_format($devolucao->multa, 2, ',', '.') }}</p>

            <div class="mt-6">
                <a href="{{ route('devolucoes.edit', $devolucao->id) }}" class="text-blue-500 hover:underline">Editar</a>
                <form action="{{ route('devolucoes.destroy', $devolucao->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Deletar</button>
                </form>
                <a href="{{ route('devolucoes.index') }}" class="ml-4 text-gray-500 hover:underline">Voltar para a lista</a>
            </div>
        </div>
    </div>
@endsection
