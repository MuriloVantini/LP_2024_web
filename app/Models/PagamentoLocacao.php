<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagamentoLocacao extends Model
{
    use HasFactory;

    protected $table = 'pagamentos_locacao';

    protected $fillable = [
        'locacao_id',
        'data_pagamento',
        'valor_pago',
        'metodo_pagamento',
    ];

    // Relacionamento com Locacao
    public function locacao()
    {
        return $this->belongsTo(Locacao::class);
    }
}
