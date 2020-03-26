<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogos extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'categoria_id',
        'descricao',
        'img',
        'preco'
    ];
    protected $table = 'Jogos';

    public function Categorias(){
        return $this->hasMany(Categorias::class, 'id');
    }
    public function Vendas(){
        return $this->hasMany(Vendas::class, 'id');
    }
}
