<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'plataforma_id',
        'jogos_id'
    ];
    protected $table = 'Categorias';

    public function Plataformas(){
        return $this->hasMany(Plataformas:: class, 'id');
    }
    public function Jogos(){
        return $this->hasMany(Jogos:: class, 'id');
    }
}
