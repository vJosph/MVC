<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plataformas extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'img'
    ];

    public function Categorias(){
        return $this->hasMany(Categorias:: class, 'id');
    }
}
