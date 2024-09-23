<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $table = 'veiculos';

    protected $fillable = [
        'modelo',
        'marca',
        'preco_diaria',
        'disponibilidade',
    ];

    // Relacionamento com Locacao
    public function locacoes()
    {
        return $this->hasMany(Locacao::class);
    }
}
