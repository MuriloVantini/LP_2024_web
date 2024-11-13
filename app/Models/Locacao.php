<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacao extends Model
{
    use HasFactory;

    protected $table = 'locacoes';

    protected $fillable = [
        'user_id',
        'veiculo_id',
        'data_inicio',
        'data_fim',
    ];

    // Relacionamento com Veiculo
    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }

    // Relacionamento com User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com Pagamentos
    public function pagamentos()
    {
        return $this->hasMany(PagamentoLocacao::class);
    }

    // Relacionamento com Devolucao
    public function devolucao()
    {
        return $this->hasOne(DevolucaoVeiculo::class);
    }
}
