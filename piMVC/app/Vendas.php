<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'data_da_venda'
    ];
    protected $table = 'Vendas';

    public function Clientes(){
        return $this->hasMany(Clientes:: class, 'id');
    }
}
