<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'data_da_venda',
        'vendedor_id'
    ];
    protected $table = 'Vendas';

    public function Cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function notaFiscal()
    {

        return $this->hasOne(NotasFiscais::class, 'venda_id');
    }
    public function ProdutosVenda()
    {
        return $this->hasMany(ProdutosVenda::class, 'venda_id');
    }
    public function Vendedor(){
        return $this->hasOne(Vendedores::class, 'vendedor_id');
    }
}
