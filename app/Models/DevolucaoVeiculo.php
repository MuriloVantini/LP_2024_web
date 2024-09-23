<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevolucaoVeiculo extends Model
{
    use HasFactory;

    protected $table = 'devolucoes_veiculos';

    protected $fillable = [
        'locacao_id',
        'data_devolucao',
        'status_veiculo',
        'multa',
    ];

    // Relacionamento com Locacao
    public function locacao()
    {
        return $this->belongsTo(Locacao::class);
    }
}
