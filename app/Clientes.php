<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'email',
        'senha'
    ];
    protected $table = 'Clientes';

    public function Vendas(){
        return $this->hasMany(Vendas:: class, 'id');
    }
}
