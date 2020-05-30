<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JogosVenda extends Model
{
    protected $fillable = [
        'id',
        'venda_id',
        'jogos_id',
        'valor'
    ];
    protected $table = 'JogosVenda';

    public function Jogos()
    {
        return $this->hasMany(Jogos::class, 'id');
    }
    public function Vendas()
    {
        return $this->hasMany(Vendas::class, 'id');
    }
}
