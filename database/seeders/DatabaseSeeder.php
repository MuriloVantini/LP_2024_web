<?php

namespace Database\Seeders;

use App\Models\DevolucaoVeiculo;
use App\Models\Locacao;
use App\Models\PagamentoLocacao;
use App\Models\User;
use App\Models\Veiculo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Veiculo::factory(10)->create();
        Locacao::factory(10)->create();
        // DevolucaoVeiculo::factory(10)->create();
        // PagamentoLocacao::factory(10)->create();
    }
}
