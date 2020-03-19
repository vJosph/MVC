<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutosVenda extends Model
{
    protected $fillable = ['id', 'venda_id', 'produto_id', 'quantidade', 'valor'];
    protected $table = 'ProdutosVenda';

    public function Produtos()
    {
        return $this->hasOne(Produtos::class, 'produto_id');
    }
}
