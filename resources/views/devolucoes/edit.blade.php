@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">Editar Devolução</h1>

        <div class="mt-4 bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            @if (session('success'))
                <div class="mb-4 text-green-500">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('devolucoes.update', $devolucao->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="data_devolucao" class="block text-gray-700">Data da Devolução:</label>
                    <input type="date" name="data_devolucao" id="data_devolucao" value="{{ old('data_devolucao', $devolucao->data_devolucao) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    @error('data_devolucao')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="status_veiculo" class="block text-gray-700">Status do Veículo:</label>
                    <select name="status_veiculo" id="status_veiculo" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="completo" {{ $devolucao->status_veiculo == 'completo' ? 'selected' : '' }}>Completo</option>
                        <option value="danificado" {{ $devolucao->status_veiculo == 'danificado' ? 'selected' : '' }}>Danificado</option>
                    </select>
                    @error('status_veiculo')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="multa" class="block text-gray-700">Multa:</label>
                    <input type="text" name="multa" id="multa" value="{{ old('multa', $devolucao->multa) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    @error('multa')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Atualizar Devolução</button>
                    <a href="{{ route('devolucoes.show', $devolucao->id) }}" class="ml-4 text-gray-500 hover:underline">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
