<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'id',
        'endereco',
        'nome',
        'email',
        'telefone'
    ];
    protected $table = 'Clientes';

    public function vendas(){
        return $this->hasMany(Vendas::class, 'cliente_id');
    }

    public function ProdutosVenda(){
        return $this->hasManyThrough(ProdutosVenda::class, 'id');
    }

    public function ProdutosVendedores(){
        return $this->hasManyThrough(Vendedores::class, 'id');
    }
}
