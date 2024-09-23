@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">Editar Pagamento</h1>

        <div class="mt-4 bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            @if (session('success'))
                <div class="mb-4 text-green-500">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('pagamentos.update', $pagamento->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="data_pagamento" class="block text-gray-700">Data do Pagamento:</label>
                    <input type="date" name="data_pagamento" id="data_pagamento" value="{{ old('data_pagamento', $pagamento->data_pagamento) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    @error('data_pagamento')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="valor_pago" class="block text-gray-700">Valor Pago:</label>
                    <input type="text" name="valor_pago" id="valor_pago" value="{{ old('valor_pago', $pagamento->valor_pago) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    @error('valor_pago')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="metodo_pagamento" class="block text-gray-700">Método de Pagamento:</label>
                    <select name="metodo_pagamento" id="metodo_pagamento" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="cartao" {{ $pagamento->metodo_pagamento == 'cartao' ? 'selected' : '' }}>Cartão</option>
                        <option value="dinheiro" {{ $pagamento->metodo_pagamento == 'dinheiro' ? 'selected' : '' }}>Dinheiro</option>
                        <option value="transferencia" {{ $pagamento->metodo_pagamento == 'transferencia' ? 'selected' : '' }}>Transferência</option>
                    </select>
                    @error('metodo_pagamento')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Atualizar Pagamento</button>
                    <a href="{{ route('pagamentos.show', $pagamento->id) }}" class="ml-4 text-gray-500 hover:underline">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
