<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = 'pedido';

    protected $fillable = [
        'id_cliente',
        'data_entrega',
        'valor_frete'
    ];

    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'id_cliente');
    }

}
