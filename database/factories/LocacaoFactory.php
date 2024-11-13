<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Veiculo;
use App\Models\Locacao;
use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locacao>
 */
class LocacaoFactory extends Factory
{
    protected $model = Locacao::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Obter um veículo aleatório disponível
        $veiculo = Veiculo::inRandomOrder()->first();

        // Gerar data de início como objeto DateTime
        $dataInicio = $this->faker->dateTimeThisYear();

        // Garantir que a data de fim esteja no máximo 7 dias após a data de início
        $dataFim = $this->faker->dateTimeInInterval($dataInicio, '+7 days');

        // Calcular quantidade de dias e valor total
        $dias = $dataInicio->diff($dataFim)->days;
        $valorTotal = $dias * $veiculo->preco_diaria;

        return [
            'user_id' => User::factory(),
            'veiculo_id' => $veiculo->id,
            'data_inicio' => $dataInicio,
            'data_fim' => $dataFim,
            'valor_total' => $valorTotal,
        ];
    }
}
