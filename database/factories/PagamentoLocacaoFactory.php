<?php

namespace Database\Factories;

use App\Models\Locacao;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PagamentoLocacao>
 */
class PagamentoLocacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'locacao_id' => Locacao::factory(),
            'data_pagamento' => $this->faker->date(),
            'valor_pago' => $this->faker->randomFloat(2, 75, 1000),
            'metodo_pagamento' =>fake()->randomElement(['cartao', 'dinheiro', 'transferencia'])
        ];
    }
}
