<?php

namespace Database\Factories;

use App\Models\Locacao;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DevolucaoVeiculo>
 */
class DevolucaoVeiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'locacao_id'=>Locacao::factory(),
            'data_devolucao'=>fake()->date(),
            'status_veiculo'=>fake()->randomElement(['completo', 'danificado'])
        ];
    }
}
