<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pagamentos_locacao', function (Blueprint $table) {
            $table->id();  // Corrigido para gerar uma coluna 'id'
            $table->foreignId('locacao_id')->constrained('locacoes')->onDelete('cascade');  // FK para tabela 'locacoes'
            $table->date('data_pagamento');
            $table->decimal('valor_pago', 10, 2);
            $table->enum('metodo_pagamento', ['cartao', 'dinheiro', 'transferencia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagamentos_locacao');
    }
};
