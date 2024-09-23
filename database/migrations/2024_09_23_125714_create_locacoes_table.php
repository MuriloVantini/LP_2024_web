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
        Schema::create('locacoes', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // FK para tabela 'users'
            $table->unsignedBigInteger('veiculo_id');  // FK para tabela 'veiculos'
            $table->foreign('veiculo_id')->references('id_veiculo')->on('veiculos')->onDelete('cascade');  // Referenciando 'id_veiculo'
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->decimal('valor_total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locacoes');
    }
};
