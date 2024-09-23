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
        Schema::create('devolucoes_veiculos', function (Blueprint $table) {
            $table->id();  // Corrigido para gerar uma coluna 'id'
            $table->foreignId('locacao_id')->constrained('locacoes')->onDelete('cascade');  // FK para tabela 'locacoes'
            $table->date('data_devolucao');
            $table->enum('status_veiculo', ['completo', 'danificado']);
            $table->decimal('multa', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devolucoes_veiculos');
    }
};
