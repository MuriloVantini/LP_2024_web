<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Veiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locacao>
 */
class LocacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'veiculo_id'=>Veiculo::factory(),
            'data_inicio'=> $dataInicio = fake()->date(),
            'data_fim'=> fake()->dateTimeInInterval($dataInicio, '+7 days')
            // 'valor_total'=> $valorTotal = fake()->randomFloat(2, 75, 1000),
        ];
    }
}
