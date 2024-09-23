@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">Detalhes do Veículo</h1>

        <div class="mt-4 bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold">Modelo: {{ $veiculo->modelo }}</h2>
            <p><strong>Marca:</strong> {{ $veiculo->marca }}</p>
            <p><strong>Preço Diário:</strong> R$ {{ number_format($veiculo->preco_diaria, 2, ',', '.') }}</p>
            <p><strong>Disponibilidade:</strong> {{ $veiculo->disponibilidade ? 'Disponível' : 'Indisponível' }}</p>

            <div class="mt-6">
                <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="text-blue-500 hover:underline">Editar</a>
                <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Deletar</button>
                </form>
                <a href="{{ route('veiculos.index') }}" class="ml-4 text-gray-500 hover:underline">Voltar para a lista</a>
            </div>
        </div>
    </div>
@endsection
