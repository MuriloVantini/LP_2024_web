@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">Detalhes do Pagamento</h1>

        <div class="mt-4 bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            <p><strong>Locação:</strong> {{ $pagamento->locacao->id }}</p>
            <p><strong>Data do Pagamento:</strong> {{ $pagamento->data_pagamento }}</p>
            <p><strong>Valor Pago:</strong> R$ {{ number_format($pagamento->valor_pago, 2, ',', '.') }}</p>
            <p><strong>Método de Pagamento:</strong> {{ ucfirst($pagamento->metodo_pagamento) }}</p>

            <div class="mt-6">
                <a href="{{ route('pagamentos.edit', $pagamento->id) }}" class="text-blue-500 hover:underline">Editar</a>
                <form action="{{ route('pagamentos.destroy', $pagamento->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Deletar</button>
                </form>
                <a href="{{ route('pagamentos.index') }}" class="ml-4 text-gray-500 hover:underline">Voltar para a lista</a>
            </div>
        </div>
    </div>
@endsection
